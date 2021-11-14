<?php

namespace App\Http\Controllers\API;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Role;
use App\Http\Resources\AuthResource;
use App\Http\Resources\UsersCollection;

class APIUserController extends APIBaseController {
    /**
     * @group Sale management
     * @header Authorization Bearer {token}
     * @authenticated
     * Create sale-manager/sale
     * @bodyParam   name    string  required
     * @bodyParam   email    string  required
     * @bodyParam   password    string  required
     * @bodyParam   roleId    string  required
     */
    function createSale(Request $request) {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|email|unique:users,email',
            'password' => 'required|min:5',
            'roleId' => 'required'
        ]);
        $user = auth()->user();
        $role = Role::find($request->get('roleId'));
        if ($role) {
            if ($role->id != $user->role->id) {
                $user = new User([
                    'name' => $request->get('name'),
                    'email' => $request->get('email'),
                    'password' => bcrypt($request->get('password')),
                    'user_id' => $user->id
                ]);
                $user->role()->associate($role);
                $user->save();
                return $this->sendResponse($user);
            }
            return $this->sendError("You don't have permission to create this user");
        }
        return $this->sendError("Role not found!");
    }

    /**
     * @group Sale management
     * @header Authorization Bearer {token}
     * @authenticated
     * Get DSM
     * @bodyParam   offset   int
     * @bodyParam   limit    int
     */
    function getDSMs(Request $request) {
        $role = Role::whereName("DSM")->first();
        if ($role != null) {
            $offset = $request->get("offset") ?? 0;
            $limit = $request->get("limit") ?? 20;
            $dsms = User::with("role")->where("role_id", "=", $role->id)->skip($offset)->take($limit)->get();
            if ($dsms) {
                return $this->sendResponse($dsms);
            }
            return $this->sendError("DSM not found!");
        }
        return $this->sendError("Something went wrong!");
    }

    /**
     * @group Sale management
     * @header Authorization Bearer {token}
     * @authenticated
     * Get sale-executives based on DSM
     * @bodyParam   dsmId    string  required
     */
    function getSaleExecutives(Request $request) {
      $sales = User::where("user_id", "=", $request->get('dsmId'))->with("role")->get();
      if ($sales) {
        return $this->sendResponse($sales);
      }
      return $this->sendError("Can not find any sales executives with this DSM");
    }

    /**
     * @group Customer management
     * @header Authorization Bearer {token}
     * @authenticated
     * Create customer
     * @bodyParam   name    string  required
     * @bodyParam   email    string  required
     */
    function createCustomer(Request $request) {

    }
}
