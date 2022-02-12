<?php

namespace App\Repositories\Customer;

use App\Models\Customer;
use App\Models\Industry;
use App\Models\KpiActivity;
use App\Models\Package;
use App\Models\Pipeline;
use App\Models\Territory;
use App\Repositories\Customer\CustomerRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CustomerRepository implements CustomerRepositoryInterface {
    public function get_sales_pipeline(Request $request) {
        $limit = $request->query("limit");
        $show_all_customers = $request->query("show_all_sales_pipeline");
        $customer_pipeline = Pipeline::whereName(__("pipeline.customer"))->first();
        if ($customer_pipeline) {
            if ($show_all_customers == "true") {
                return Customer::orderBy("name")
                    ->where("pipeline_id", "!=", $customer_pipeline->id)
                    ->paginate($limit);
            }
            return Customer::orderBy("name")
                ->where("user_id", auth()->user()->id)
                ->where("pipeline_id", "!=", $customer_pipeline->id)
                ->paginate($limit);
        }
    }

    public function get_customers(Request $request)
    {
        $limit = $request->query("limit");
        $show_all_customers = $request->query("show_all_customers");
        $customer_pipeline = Pipeline::whereName(__("pipeline.customer"))->first();
        if ($customer_pipeline) {
            if ($show_all_customers == "true") {
                return Customer::orderBy("name")
                    ->where("pipeline_id", "=", $customer_pipeline->id)
                    ->paginate($limit);
            }
            return Customer::orderBy("name")
                ->where("user_id", auth()->user()->id)
                ->where("pipeline_id", "=", $customer_pipeline->id)
                ->paginate($limit);
        }
    }

    public function create_customer(Request $request)
    {
        $territory = Territory::find($request->get("territory_id"));
        $industry = Industry::find($request->get("industry_id"));
        $kpi_activity = KpiActivity::find($request->get("kpi_activity_id"));
        $pipeline = Pipeline::find($request->get("pipeline_id"));
        $package = Package::find($request->get("package_id"));
        $customer = new Customer([
            "id" => Str::uuid(),
            "name" => $request->get("name"),
            'email' => $request->get('email'),
            "phone_number" => $request->get("phone_number"),
            "contact_name" => $request->get("contact_name"),
            "telegram" => $request->get("telegram"),
            "bandwidth" => $request->get("bandwidth"),
            "deposit" => $request->get("deposit"),
            "installation" => $request->get("installation"),
            "payment_term" => $request->get("payment_term"),
            "estimated_cash_collect" => $request->get("estimated_cash_collect"),
            "monthly_fee" => $request->get("monthly_fee"),
            "include_vat" => $request->get("include_vat"),
            "expected_closed_date" => $request->get("expected_closed_date"),
            "billing_date" => $request->get("billing_date"),
            "next_follow_up_date" => $request->get("next_follow_up_date"),
            "remark" => $request->get("remark"),
            "user_id" => auth()->user()->id,
        ]);
        if ($territory) {
            $customer->territory()->associate($territory);
        }
        if ($industry) {
            $customer->industry()->associate($industry);
        }
        if ($kpi_activity) {
            $customer->kpi_activity()->associate($kpi_activity);
        }
        if ($pipeline) {
            $customer->pipeline()->associate($pipeline);
        }
        if ($package) {
            $customer->package()->associate($package);
        }
        $customer->save();
        return $customer;
    }

    public function update_customer($id, Request $request)
    {
        $customer = Customer::find($id);
        $territory = Territory::find($request->get("territory_id"));
        $industry = Industry::find($request->get("industry_id"));
        $kpi_activity = KpiActivity::find($request->get("kpi_activity_id"));
        $pipeline = Pipeline::find($request->get("pipeline_id"));
        $package = Package::find($request->get("package_id"));
        if ($customer) {
            $customer->update($request->all());
            if ($territory) {
                $customer->territory()->associate($territory)->save();
            }
            if ($industry) {
                $customer->industry()->associate($industry)->save();
            }
            if ($kpi_activity) {
                $customer->kpi_activity()->associate($kpi_activity)->save();
            }
            if ($pipeline) {
                $customer->pipeline()->associate($pipeline)->save();
            }
            if ($package) {
                $customer->package()->associate($package)->save();
            }
            return $customer;
        }
    }

    public function get_customer($id)
    {
        $customer = Customer::find($id);
        if ($customer) {
            return $customer;
        }
        return null;
    }
}
