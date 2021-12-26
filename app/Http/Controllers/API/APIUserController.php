<?php

namespace App\Http\Controllers\API;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Role;
use App\Http\Resources\User\UserCollection;
use App\Http\Resources\User\UserResource;

class APIUserController extends APIBaseController {
    function createSale(Request $request) {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|string',
            // 'email' => 'required|string|email|unique:users,email',
            'password' => 'required|min:5',
            'repeat_password' => 'required|min:5',
            'role_id' => 'required',
        ]);
        $current_user = auth()->user();
        $role = Role::find($request->get('role_id'));

        if ($role) {
            if ($role->id != $current_user->role->id) {
                if ($request->get("password") == $request->get("repeat_password")) {
                    $user_id = $request->get("user_id") != null ? $request->get("user_id") : $current_user->id;
                    $user = new User([
                        'name' => $request->get('name'),
                        'email' => $request->get('email'),
                        'password' => bcrypt($request->get('password')),
                        'user_id' => $user_id
                    ]);
                    $user->role()->associate($role);
                    $user->save();
                    return $this->send_response(new UserResource($user));
                }
                return $this->send_error(__("custom_error.password_not_match"), [], 500);
            }
            return $this->send_error(__("custom_error.no_permission_to_make_change"), [], 500);
        }
        return $this->send_error(__("custom_error.data_not_found", ["object" => "Role"]));
    }

    function getProfile() {
        $user = auth()->user();
        if ($user) {
            $response = new UserResource($user);
            return $this->send_response($response);
        }
        return $this->send_error(__("custom_error.something_went_wrong"), [], 500);
    }

    function getDSMs(Request $request) {
        $role = Role::whereName("DSM")->first();
        if ($role != null) {
            $offset = $request->get("offset") ?? 0;
            $limit = $request->get("limit") ?? 20;
            $dsms = User::with("role")->where("role_id", "=", $role->id)->skip($offset)->take($limit)->get();
            if ($dsms) {
                return $this->send_response(new UserCollection($dsms));
            }
            return $this->send_error(__("custom_error.data_not_found", ["object" => "User"]));
        }
        return $this->send_error(__("custom_error.data_not_found", ["object" => "Role"]));
    }

    function getSaleExecutives(Request $request) {
        $dsm_id = $request->get("dsm_id") != null ? $request->get("dsm_id") : auth()->user()->id;
        $offset = $request->get("offset") ?? 0;
        $limit = $request->get("limit") ?? 20;
        $role = Role::whereName("Sale")->first();
        if ($role) {
            $sales = User::where("user_id", "=", $dsm_id)
            ->where("role_id", "=", $role->id)
            ->with("role")
            ->skip($offset)
            ->take($limit)
            ->get();
            return $this->send_response(new UserCollection($sales));
        }
        return $this->send_error(__("custom_error.data_not_found", ["object" => "Role"]));
    }
}
