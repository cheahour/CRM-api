<?php

namespace App\Repositories\Dashboard;

use App\Http\Resources\User\UserResource;
use App\Models\Customer;
use App\Models\Package;
use App\Models\Pipeline;
use App\Models\Territory;
use App\Models\User;
use App\Repositories\Dashboard\DashboardRepositoryInterface;
use Illuminate\Http\Request;

use function PHPSTORM_META\map;

class DashboardRepository implements DashboardRepositoryInterface {
    public function get_customers_count_every_dsms(Request $request)
    {
        $response = array();
        $dsms = User::dsms();
        foreach ($dsms as $dsm) {
            $sales = User::sales_based_on_dsm($dsm->id);
            if (count($sales) > 0) {
                $count = 0;
                foreach ($sales as $sale) {
                    $count += count($sale->customers);
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

    public function get_customers_count_every_sales(Request $request)
    {
        $users = User::sales();
        $format = array();
        foreach ($users as $user) {
            $format[] = [
                "data" => new UserResource($user),
                "count" => count($user->customers),
            ];
        }
        return $format;
    }

    public function get_customers_total(Request $request) {
        $customer_pipeline = Pipeline::whereName(__("pipeline.customer"))->first();
        if ($customer_pipeline) {
            $customers = Customer::where("pipeline_id", $customer_pipeline->id)->get();
             return count($customers);
        }
        return 0;
    }

    public function get_sales_pipeline_total(Request $request) {
        $customer_pipeline = Pipeline::whereName(__("pipeline.customer"))->first();
        if ($customer_pipeline) {
            $customers = Customer::where("pipeline_id", "!=", $customer_pipeline->id)->get();
            return count($customers);
        }
        return 0;
    }

    public function get_customers_payment_term(Request $request)
    {
        $payment_terms = Customer::get()
        ->groupBy(["payment_term"])
        ->map
        ->count();
        $response = $payment_terms->map(function($count, $data) {
            return [
                "data" => $data,
                "count" => $count,
            ];
        });
        return $response->values();
    }

    public function get_most_sale_package(Request $request) {
        $customer_pipeline = Pipeline::whereName(__("pipeline.customer"))->first();
        $package_id = Customer::where("pipeline_id", $customer_pipeline->id)
                        ->select("package_id")
                        ->groupBy("package_id")
                        ->orderByRaw('COUNT(*) DESC')
                        ->first();
        if ($package_id) {
            return Package::find($package_id)->first();
        }
    }

    public function get_sale_packages(Request $request)
    {
        $customer_pipeline = Pipeline::whereName(__("pipeline.customer"))->first();
        $packages = Customer::all()
        ->where("pipeline_id", $customer_pipeline->id)
        ->groupBy(function ($item) {
            return $item->package_id;
         })
         ->map(function($item){
             return $item->all();
         });
        return $packages;
    }

    public function get_most_sale_territory(Request $request)
    {
        $customer_pipeline = Pipeline::whereName(__("pipeline.customer"))->first();
        $territory_id = Customer::where("pipeline_id", $customer_pipeline->id)
                        ->select("territory_id")
                        ->groupBy("territory_id")
                        ->orderByRaw('COUNT(*) DESC')
                        ->first();
        if ($territory_id) {
            return Territory::find($territory_id)->first();
        }
    }

    public function get_sale_territories(Request $request)
    {
        $customer_pipeline = Pipeline::whereName(__("pipeline.customer"))->first();
        $territories = Customer::all()
        ->where("pipeline_id", $customer_pipeline->id)
        ->groupBy(function ($item) {
            return $item->territory_id;
         })
         ->map(function($item){
             return $item->all();
         });
        return $territories;
    }
}
