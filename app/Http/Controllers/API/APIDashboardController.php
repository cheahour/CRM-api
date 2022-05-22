<?php

namespace App\Http\Controllers\API;

use App\Enums\UserRoleType;
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
        $role = UserRoleType::fromValue(auth()->user()->role->name);
        if ($role->is(UserRoleType::HeadSale))
        {
            $customers_total = $this->repository->get_customers_total($request);
            $sales_pipeline_total = $this->repository->get_sales_pipeline_total($request);
            $sales = $this->repository->get_customers_pipeline_by_user($request);
            $payment_terms = $this->repository->get_sale_payment_terms($request);
            $packages = $this->repository->get_sale_packages($request);
            $territories = $this->repository->get_sale_territories($request);
            $response = [
                "customers_total" => $customers_total,
                "sales_pipeline_total" => $sales_pipeline_total,
                "sales" => $sales,
                "payment_terms" => $payment_terms,
                "packages" => $packages,
                "territories" => $territories
            ];
            return $this->send_response($response);
        }
        else if ($role->is(UserRoleType::DSM))
        {
            $customers_total = $this->repository->get_customers_total($request);
            $sales_pipeline_total = $this->repository->get_sales_pipeline_total($request);
            $customers_pipeline = $this->repository->get_customers_pipeline_by_user($request);
            $payment_terms = $this->repository->get_sale_payment_terms($request);
            $packages = $this->repository->get_sale_packages($request);
            $territories = $this->repository->get_sale_territories($request);
            $response = [
                "customers_total" => $customers_total,
                "sales_pipeline_total" => $sales_pipeline_total,
                "customers_pipeline" => $customers_pipeline,
                "payment_terms" => $payment_terms,
                "packages" => $packages,
                "territories" => $territories,
            ];
            return $this->send_response($response);
        }
        else if ($role->is(UserRoleType::Sale))
        {
            $customers_total = $this->repository->get_customers_total($request);
            $sales_pipeline_total = $this->repository->get_sales_pipeline_total($request);
            $payment_terms = $this->repository->get_sale_payment_terms($request);
            $packages = $this->repository->get_sale_packages($request);
            $territories = $this->repository->get_sale_territories($request);
            $response = [
                "customers_total" => $customers_total,
                "sales_pipeline_total" => $sales_pipeline_total,
                "payment_terms" => $payment_terms,
                "packages" => $packages,
                "territories" => $territories,
            ];
            return $this->send_response($response);
        }
    }
}
