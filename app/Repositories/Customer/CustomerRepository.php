<?php

namespace App\Repositories\Customer;

use App\Models\Customer;
use App\Models\Industry;
use App\Models\KpiActivity;
use App\Models\Package;
use App\Models\Territory;
use App\Repositories\Customer\CustomerRepositoryInterface;
use Illuminate\Http\Request;

class CustomerRepository implements CustomerRepositoryInterface {
    public function get_customers()
    {

    }

    public function create_customer(Request $request)
    {
        $territory = Territory::find($request->get("territory_id"));
        $industry = Industry::find($request->get("industry_id"));
        $kpi_activity = KpiActivity::find($request->get("kpi_activity_id"));
        $package = Package::find($request->get("package_id"));
        if ($territory && $industry && $kpi_activity && $package) {
            $customer = new Customer([
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
            ]);
            $customer->territory()->associate($territory);
            $customer->industry()->associate($industry);
            $customer->kpi_activity()->associate($kpi_activity);
            $customer->package()->associate($package);
            $customer->save();
            return $customer;
        }
        return null;
    }

    public function update_customer($id, Request $request)
    {
        $customer = Customer::find($id);
        $territory = Territory::find($request->get("territory_id"));
        $industry = Industry::find($request->get("industry_id"));
        $kpi_activity = KpiActivity::find($request->get("kpi_activity_id"));
        $package = Package::find($request->get("package_id"));
        if ($territory && $industry && $kpi_activity && $package) {
            $customer->update($request->all());
            $customer->territory()->associate($territory)->save();
            $customer->industry()->associate($industry)->save();
            $customer->kpi_activity()->associate($kpi_activity)->save();
            $customer->package()->associate($package)->save();
            return $customer;
        }
        return null;
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
