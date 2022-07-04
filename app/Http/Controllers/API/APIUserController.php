<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Resources\User\UserCollection;
use App\Http\Resources\User\UserResource;
use App\Repositories\User\UserRepositoryInterface;
use Validator;

class APIUserController extends APIBaseController
{

    private UserRepositoryInterface $repository;

    public function __construct(UserRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    function create_user(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'email' => 'required|string',
            'password' => 'required|min:5',
            "user_id" => "required",
            'role_id' => 'required',
        ]);
        if ($validator->fails()) {
            return $this->send_error($validator->errors()->first(), 422);
        }
        $user = $this->repository->create_user($request);
        if ($user) {
            return $this->send_response($user);
        }
        return $this->send_error(__("custom_error.something_went_wrong"), 500);
    }

    public function update_user(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
        ]);
        if ($validator->fails()) {
            return $this->send_error($validator->errors()->first(), 422);
        }
        $user = $this->repository->update_user($request, $id);
        if ($user) {
            $format = new UserResource($user);
            return $this->send_response($format);
        }
        return $this->send_error(__("custom_error.something_went_wrong"), 500);
    }

    public function delete_user(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'delete_user_id' => 'required',
            'user_id' => 'required',
        ]);
        if ($validator->fails()) {
            return $this->send_error(
                $validator->errors()->first(),
                422
            );
        }
        $delete = $this->repository->delete_user($request);
        if ($delete) {
            return $this->send_response($delete);
        }
        return $this->send_error(
            __("custom_error.something_went_wrong"),
            500
        );
    }

    function delete_sale_admin($id)
    {
        $delete = $this->repository->delete_sale_admin($id);
        if ($delete) {
            return $this->send_response($delete);
        }
        return $this->send_error(__("custom_error.something_went_wrong"), 500);
    }

    function get_profile()
    {
        $user = $this->repository->get_account();
        if ($user) {
            $format = new UserResource($user);
            return $this->send_response($format);
        }
        return $this->send_error(__("custom_error.data_not_found", ["object" => "Account"]));
    }

    function get_sale_admins(Request $request)
    {
        $dsms = $this->repository->get_sale_admins($request);
        $format = new UserCollection($dsms);
        return $this->send_response($format->response()->getData(true));
    }

    function get_dsms(Request $request)
    {
        $dsms = $this->repository->get_dsms($request);
        $format = new UserCollection($dsms);
        return $this->send_response($format->response()->getData(true));
    }

    function get_sales(Request $request)
    {
        $sales = $this->repository->get_sales($request);
        $format = new UserCollection($sales);
        return $this->send_response($format->response()->getData(true));
    }
}
