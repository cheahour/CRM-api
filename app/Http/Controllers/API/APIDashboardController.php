<?php

namespace App\Http\Controllers\API;

use App\Http\Resources\Setting\SettingResource;
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
