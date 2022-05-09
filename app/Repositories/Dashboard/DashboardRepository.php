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
use Auth;
use Illuminate\Http\Request;

use function GuzzleHttp\Promise\each;

class DashboardRepository implements DashboardRepositoryInterface {
    public function get_customers_pipeline_by_user(Request $request)
    {
        $role = UserRoleType::fromValue(auth()->user()->role->name);
        $from_date = $request->date("from_date");
        $to_date = $request->date("to_date");

        if ($role->is(UserRoleType::HeadSale) || $role->is(UserRoleType::SaleAdmin))
        {
            return User::sales()
            ->map(function($dsm) {
                return [
                    "data" => new UserResource($dsm),
                    "count" => $dsm->customers()->count(),
                ];
            });
        }
        else if ($role->is(UserRoleType::DSM))
        {
            return Auth::user()
            ->sales()
            ->only_sales_from_dsm()
            ->values()
            ->map(function($sale) use($from_date, $to_date) {
                $count = $sale
                ->customers
                ->between_date($from_date, $to_date)
                ->count();
                return [
                    "data" => new UserResource($sale),
                    "count" => $count
                ];
            });
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
            return Auth::user()
            ->sales()
            ->only_sales_from_dsm()
            ->map(function($sale) use($customer_pipeline, $from_date, $to_date) {
                return $sale
                ->customers
                ->where("pipeline_id", "==", $customer_pipeline->id)
                ->between_date($from_date, $to_date)
                ->count();
            })
            ->sum();
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

        if ($role->is(UserRoleType::HeadSale) || $role->is(UserRoleType::SaleAdmin))
        {
            return Customer::where("pipeline_id", "!=", $customer_pipeline->id)
                ->whereBetween("updated_at", [$from_date, $to_date])
                ->count();
        }
        else if ($role->is(UserRoleType::DSM))
        {
            return Auth::user()
            ->sales()
            ->only_sales_from_dsm()
            ->map(function($sale) use($customer_pipeline, $from_date, $to_date) {
                return $sale
                ->customers
                ->where("pipeline_id", "!=", $customer_pipeline->id)
                ->between_date($from_date, $to_date)
                ->count();
            })
            ->sum();
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
        $from_date = $request->date("from_date");
        $to_date = $request->date("to_date");

        if ($role->is(UserRoleType::HeadSale) || $role->is(UserRoleType::SaleAdmin))
        {
            return Customer::filterPipeline(__("pipeline.customer"))
            ->whereBetween("updated_at", [$from_date, $to_date])
            ->groupBy("payment_term")
            ->map(function ($customers, $term) {
                return [
                    "data" => $term,
                    "count" => $customers->count()
                ];
            })
            ->values();
        }
        else if ($role->is(UserRoleType::DSM))
        {
            return Auth::user()
            ->sales()
            ->only_sales_from_dsm()
            ->map(function ($sale) { return $sale->customers; })
            ->values();
        }
        else if ($role->is(UserRoleType::Sale))
        {
            return auth()->user()
            ->customers
            ->where("pipeline_id", $pipeline->id)
            ->between_date($from_date, $to_date)
            ->groupBy("payment_term")
            ->map(function ($customers, $term) {
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
            return Customer::filterPipeline(__("pipeline.customer"))
            ->whereBetween("updated_at", [$from_date, $to_date])
            ->groupBy("territory_id")
            ->map(function ($customers, $id) {
                $territory = Territory::find($id);
                return [
                    "data" => new SettingResource($territory),
                    "count" => $customers
                    ->count()
                ];
            })
            ->values();
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
