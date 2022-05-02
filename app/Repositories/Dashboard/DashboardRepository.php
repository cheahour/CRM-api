<?php

namespace App\Repositories\Dashboard;

use App\Enums\UserRoleType;
use App\Http\Resources\Setting\SettingResource;
use App\Http\Resources\User\UserResource;
use App\Models\Customer;
use App\Models\Package;
use App\Models\Pipeline;
use App\Models\Territory;
use App\Models\User;
use App\Repositories\Dashboard\DashboardRepositoryInterface;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardRepository implements DashboardRepositoryInterface {
    public function get_customers_pipeline_by_user(Request $request)
    {
        $role = UserRoleType::fromValue(auth()->user()->role->name);
        $query_month = $request->query("month") ?? Carbon::now()->month;
        $response = array();
        $dsms = User::dsms();

        if ($role->is(UserRoleType::HeadSale) || $role->is(UserRoleType::SaleAdmin)) {
            foreach ($dsms as $dsm) {
                $sales = User::sales_based_on_dsm($dsm->id);
                if (count($sales) > 0) {
                    $count = 0;
                    foreach ($sales as $sale) {
                        $count += $sale->customers()
                        ->whereMonth("updated_at", $query_month)
                        ->count();
                    }
                    $response[] = [
                        "data" => new UserResource($dsm),
                        "count" => $count,
                    ];
                } else {
                    $response[] = [
                        "data" => new UserResource($dsm),
                        "count" => 0,
                    ];
                }
            }
            return $response;
        }
    }

    public function get_customers_count_every_sales(Request $request)
    {
        $role = UserRoleType::fromValue(auth()->user()->role->name);
        $query_month = $request->query("month") ?? Carbon::now()->month;

        if ($role->is(UserRoleType::HeadSale) || $role->is(UserRoleType::SaleAdmin)) {
            $users = User::sales();
            $format = array();
            foreach ($users as $user) {
                $customers = $user->customers()->whereMonth("updated_at", $query_month);
                $format[] = [
                    "data" => new UserResource($user),
                    "count" => $customers->count(),
                ];
            }
            return $format;
        }
        else if ($role->is(UserRoleType::DSM)) {
            $sales = User::sales_based_on_dsm(auth()->user()->id);
            $format = array();
            foreach ($sales as $sale) {
                $customers = $sale->customers()->whereMonth("updated_at", $query_month);
                $format[] = [
                    "data" => new UserResource($sale),
                    "count" => count($sale->customers),
                ];
            }
            return $format;
        }
    }

    public function get_customers_total(Request $request) {
        $role = UserRoleType::fromValue(auth()->user()->role->name);
        $customer_pipeline = Pipeline::whereName(__("pipeline.customer"))->first();
        $from_date = $request->date("from_date");
        $to_date = $request->date("to_date");
        if ($role->is(UserRoleType::HeadSale) || $role->is(UserRoleType::SaleAdmin))
        {
            return Customer::filterPipeline(__("pipeline.customer"))
            ->whereBetween("updated_at", [$from_date, $to_date])
            ->count();
        }
        else if ($role->is(UserRoleType::DSM))
        {
            $sales = User::sales_based_on_dsm(auth()->user()->id);
            if ($customer_pipeline)
            {
                foreach ($sales as $sale) {
                    $customers = $sale->customers()
                    ->where("pipeline_id", $customer_pipeline->id);
                    $count = $customers->count();
                }
            }
            return $count;
        }
        else if ($role->is(UserRoleType::Sale))
        {
            return auth()->user()
            ->customers
            ->where("pipeline_id", "==", $customer_pipeline->id)
            ->between_date($from_date, $to_date)
            ->count();
        }
    }

    public function get_sales_pipeline_total(Request $request) {
        $user = auth()->user();
        $role = UserRoleType::fromValue($user->role->name);
        $customer_pipeline = Pipeline::whereName(__("pipeline.customer"))->first();
        $from_date = $request->date("from_date");
        $to_date = $request->date("to_date");
        $count = 0;

        if ($role->is(UserRoleType::HeadSale) || $role->is(UserRoleType::SaleAdmin))
        {
            return Customer::where("pipeline_id", "!=", $customer_pipeline->id)
                ->whereBetween("updated_at", [$from_date, $to_date])
                ->count();
        }
        else if ($role->is(UserRoleType::DSM))
        {
            $sales = User::sales_based_on_dsm(auth()->user()->id);
            if ($customer_pipeline)
            {
                foreach ($sales as $sale) {
                    $customers = $sale->customers()
                    ->where("pipeline_id", "!=", $customer_pipeline->id)
                    ->between_date($from_date, $to_date)
                    ->get();
                    $count = $customers->count();
                }
            }
            return $count;
        }
        else if ($role->is(UserRoleType::Sale))
        {
            return auth()->user()->customers
            ->where("pipeline_id", "!=", $customer_pipeline->id)
            ->between_date($from_date, $to_date)
            ->count();
        }
    }

    public function get_sale_payment_terms(Request $request)
    {
        $user = auth()->user();
        $role = UserRoleType::fromValue($user->role->name);
        $pipeline = Pipeline::whereName(__("pipeline.customer"))->first();
        $response = [];
        $from_date = $request->date("from_date");
        $to_date = $request->date("to_date");

        if ($role->is(UserRoleType::HeadSale) || $role->is(UserRoleType::SaleAdmin))
        {
            return Customer::filterPipeline(__("pipeline.customer"))
            ->whereBetween("updated_at", [$from_date, $to_date])
            ->groupBy("package_id")
            ->map(function ($customers, $id) {
                $package = Package::find($id);
                return [
                    "data" => new SettingResource($package),
                    "count" => $customers->count()
                ];
            })
            ->values();
        }
        else if ($role->is(UserRoleType::DSM))
        {
            $sales = User::sales_based_on_dsm($user->id);
            foreach ($sales as $sale) {
                $response = $sale->customers
                ->groupBy(["payment_term"])
                ->map(function($customers, $data) {
                    return [
                        "data" => $data,
                        "count" => $customers->count(),
                    ];
                });
            }
            return $response->values();
        }
        else if ($role->is(UserRoleType::Sale))
        {
            return auth()->user()
            ->customers
            ->where("pipeline_id", $pipeline->id)
            ->between_date($from_date, $to_date)
            ->groupBy("payment_term")
            ->map(function ($customers, $term) use($from_date, $to_date) {
                return [
                    "data" => $term,
                    "count" => $customers
                    ->count(),
                ];
            })
            ->values();
        }
    }

    public function get_sale_packages(Request $request)
    {
        $role = UserRoleType::fromValue(auth()->user()->role->name);
        $pipeline = Pipeline::whereName(__("pipeline.customer"))->first();
        $from_date = $request->date("from_date");
        $to_date = $request->date("to_date");

        if ($role->is(UserRoleType::HeadSale) || $role->is(UserRoleType::SaleAdmin))
        {
            return Customer::filterPipeline(__("pipeline.customer"))
            ->whereBetween("updated_at", [$from_date, $to_date])
            ->groupBy("package_id")
            ->map(function ($customers, $id) use($from_date, $to_date) {
                $package = Package::find($id);
                return [
                    "data" => new SettingResource($package),
                    "count" => $customers
                    ->count()
                ];
            })
            ->values();
        }
        else if ($role->is(UserRoleType::DSM))
        {
        }
        else if ($role->is(UserRoleType::Sale))
        {
            return auth()->user()
            ->customers
            ->where("pipeline_id", $pipeline->id)
            ->between_date($from_date, $to_date)
            ->groupBy("package_id")
            ->map(function ($customers, $id) {
                $package = Package::find($id);
                return [
                    "data" => new SettingResource($package),
                    "count" => $customers
                    ->count(),
                ];
            })
            ->values();
        }
    }

    public function get_sale_territories(Request $request)
    {
        $role = UserRoleType::fromValue(auth()->user()->role->name);
        $pipeline = Pipeline::whereName(__("pipeline.customer"))->first();
        $from_date = $request->date("from_date");
        $to_date = $request->date("to_date");

        if ($role->is(UserRoleType::HeadSale))
        {

        }
        else if ($role->is(UserRoleType::Sale))
        {
            return auth()->user()
            ->customers
            ->where("pipeline_id", $pipeline->id)
            ->between_date($from_date, $to_date)
            ->groupBy("territory_id")
            ->map(function ($customers, $id) {
                $territory = Territory::find($id);
                return [
                    "data" => new SettingResource($territory),
                    "count" => $customers
                    ->count(),
                ];
            })
            ->values();
        }
    }
}
