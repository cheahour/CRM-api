<?php

namespace App\Http\Controllers\API;

use App\Models\Package;
use App\Models\Territory;
use App\Repositories\Dashboard\DashboardRepositoryInterface;
use Illuminate\Http\Request;

class APIDashboardController extends APIBaseController
{
    private DashboardRepositoryInterface $repository;

    public function __construct(DashboardRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function dashboard_summary(Request $request)
    {
        $customers_total = $this->repository->get_customers_total($request);
        $sales_pipeline_total = $this->repository->get_sales_pipeline_total($request);
        $most_sale_package = $this->repository->get_most_sale_package($request);
        $most_sale_territory = $this->repository->get_most_sale_territory($request);
        $customers_by_dsms = $this->repository->get_customers_count_every_dsms($request);
        $customers_count_every_sales = $this->repository->get_customers_count_every_sales($request);
        $payment_terms = $this->repository->get_customers_payment_term($request);
        $response = [
            "customers_total" => $customers_total,
            "sales_pipeline_total" => $sales_pipeline_total,
            "most_sale_package" => $most_sale_package,
            "most_sale_territory" => $most_sale_territory,
            "customers_sale_by_dsms" => $customers_by_dsms,
            "customers_sale_by_sales" => $customers_count_every_sales,
            "payment_terms" => $payment_terms,
        ];
        return $this->send_response($response);
    }

    public function get_customers_count_every_dsms(Request $request)
    {
        $response = $this->repository->get_customers_count_every_dsms($request);
        return $this->send_response($response);
    }

    public function get_customers_count_every_sales(Request $request)
    {
        $response = $this->repository->get_customers_count_every_sales($request);
        return $this->send_response($response);
    }

    public function get_customers_total(Request $request)
    {
        $count = $this->repository->get_customers_total($request);
        return $this->send_response($count);
    }

    public function get_sales_pipeline_total(Request $request)
    {
        $count = $this->repository->get_sales_pipeline_total($request);
        return $this->send_response($count);
    }

    public function get_most_sale_package(Request $request)
    {
        $package = $this->repository->get_most_sale_package($request);
        if ($package) {
            return $this->send_response($package);
        }
        return $this->send_error(__("custom_error.something_went_wrong"), 500);
    }

    public function get_sale_packages(Request $request)
    {
        $packages = $this->repository->get_sale_packages($request);
        $format = $packages->values()->map(function($group) {
            for ($i=0; $i < count($group); $i++) {
                if ($group[$i]->id != "") {
                    $package = Package::find($group[$i]->package_id);
                    return [
                        "data" => $package,
                        "count" => count($group)
                    ];
                }
            }
        });
        return $this->send_response($format);
    }

    public function get_most_sale_territory(Request $request)
    {
        $territory = $this->repository->get_most_sale_territory($request);
        if ($territory) {
            return $this->send_response($territory);
        }
        return $this->send_error(__("custom_error.something_went_wrong"), 500);
    }

    public function get_sale_territories(Request $request)
    {
        $territories = $this->repository->get_sale_territories($request);
        $format = $territories->values()->map(function($group) {
            for ($i=0; $i < count($group); $i++) {
                if ($group[$i]->id != "") {
                    $territory = Territory::find($group[$i]->territory_id);
                    return [
                        "data" => $territory,
                        "count" => count($group)
                    ];
                }
            }
        });
        return $this->send_response($format);
    }
}
