<?php

namespace App\Http\Controllers\API;

use App\Http\Resources\Customer\CustomerCollection;
use App\Http\Resources\Customer\CustomerDetailResource;
use App\Rules\PhoneNumber;
use Illuminate\Http\Request;
use App\Repositories\Customer\CustomerRepositoryInterface;
use Validator;

class APICustomerController extends APIBaseController
{
    private CustomerRepositoryInterface $repository;

    public function __construct(CustomerRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $customers = $this->repository->get_customers($request);
        $format = new CustomerCollection($customers);
        return $this->send_response($format->response()->getData(true));
    }

    public function get_sales_pipeline(Request $request)
    {
        $sales_pipeline = $this->repository->get_sales_pipeline($request);
        $format = new CustomerCollection($sales_pipeline);
        return $this->send_response($format->response()->getData(true));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "name" => "required|unique:customers,name",
            "phone_number" => ["required", new PhoneNumber],
            "phone_number" => "unique:customers,phone_number",
            "pipeline_id" => "required",
            "kpi_activity_id" => "required",
            "territory_id" => "required",
            "package_id" => "required",
            "remark" => "required",
        ], [
            "name.required" => "Name is required",
            "territory_id.required" => "Territory is required",
            "pipeline_id.required" => "Pipeline is required",
            "kpi_activity_id.required" => "KPI Activity is required",
            "package_id.required" => "Package is required",
            "remark.required" => "Remark is required"
        ]);
        if ($validator->fails()) {
            return $this->send_error($validator->errors()->first(), 422);
        }
        $customer = $this->repository->create_customer($request);
        if ($customer) {
            return $this->send_response(new CustomerDetailResource($customer));
        }
        return $this->send_error(__("custom_error.something_went_wrong"), 500);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $customer = $this->repository->get_customer($id);
        if ($customer) {
            return $this->send_response(new CustomerDetailResource($customer));
        }
        return $this->send_error(__("custom_error.data_not_found", ["object" => "Customer"]), 404);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            "name" => "required|unique:customers,name," . $id,
            "phone_number" => ["required", new PhoneNumber],
            "phone_number" => "unique:customers,phone_number," . $id,
            "pipeline_id" => "required",
            "kpi_activity_id" => "required",
            "territory_id" => "required",
            "package_id" => "required",
            "remark" => "required",
        ], [
            "name.required" => "Name is required",
            "territory_id.required" => "Territory is required",
            "pipeline_id.required" => "Pipeline is required",
            "kpi_activity_id.required" => "KPI Activity is required",
            "package_id.required" => "Package is required",
            "remark.required" => "Remark is required"
        ]);
        if ($validator->fails()) {
            return $this->send_error($validator->errors()->first(), 422);
        }
        $customer = $this->repository->update_customer($id, $request);
        if ($customer) {
            return $this->send_response(new CustomerDetailResource($customer));
        }
        return $this->send_error(__("custom_error.something_went_wrong"), 500);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    }
}
