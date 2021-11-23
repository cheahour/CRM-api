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
            'email' => 'required|string|email|unique:users,email',
            'password' => 'required|min:5',
            'repeatPassword' => 'required|min:5',
            'roleId' => 'required'
        ]);
        $user = auth()->user();
        $role = Role::find($request->get('roleId'));
        if ($role) {
            if ($role->id != $user->role->id) {
                if ($request->get("password") == $request->get("repeatPassword")) {
                    $user = new User([
                        'name' => $request->get('name'),
                        'email' => $request->get('email'),
                        'password' => bcrypt($request->get('password')),
                        'user_id' => $user->id
                    ]);
                    $user->role()->associate($role);
                    $user->save();
                    return $this->sendResponse(new UserResource($user));
                }
                return $this->sendError("Password and repeat didn't match!", [], 500);
            }
            return $this->sendError("You don't have permission to create this user");
        }
        return $this->sendError("Role not found!");
    }

    function getDSMs(Request $request) {
        $role = Role::whereName("DSM")->first();
        if ($role != null) {
            $offset = $request->get("offset") ?? 0;
            $limit = $request->get("limit") ?? 20;
            $dsms = User::with("role")->where("role_id", "=", $role->id)->skip($offset)->take($limit)->get();
            if ($dsms) {
                return $this->sendResponse(new UserCollection($dsms));
            }
            return $this->sendError("DSM not found!");
        }
        return $this->sendError("Something went wrong!");
    }

    function getSaleExecutives(Request $request) {
        $dsmId = $request->get("dsmId") == null ? auth()->user()->id : $request->get("dsmId");
        $offset = $request->get("offset") ?? 0;
        $limit = $request->get("limit") ?? 20;
        $role = Role::whereName("Sale")->first();
        if ($role) {
            $sales = User::where("user_id", "=", $dsmId)
            ->where("role_id", "=", $role->id)
            ->with("role")->skip($offset)->take($limit)->get();
            return $this->sendResponse(new UserCollection($sales));
        }
        return $this->sendError("Role not found!");
    }
}
