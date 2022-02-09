<?php

namespace App\Repositories\Dashboard;

use App\Models\Customer;
use App\Models\Package;
use App\Models\Pipeline;
use App\Models\Territory;
use App\Repositories\Dashboard\DashboardRepositoryInterface;
use Illuminate\Http\Request;

class DashboardRepository implements DashboardRepositoryInterface {
    public function get_customers_total(Request $request) {
        // $is_fetch_all_total = $request->query("show_all");
        $customer_pipeline = Pipeline::whereName(__("pipeline.customer"))->first();
        if ($customer_pipeline) {
            $customers = Customer::where("pipeline_id", $customer_pipeline->id)->get();
             return count($customers);
            // if ($is_fetch_all_total == true) {

            // }
            // dd(auth()->user()->role->name);
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
