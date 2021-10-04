<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;

class APIUserController extends APIBaseController {
    /**
     * @group User management
     * @header Authorization Bearer {token}
     * @authenticated
     * Create sale-manager/sale
     * @bodyParam   name    string  required
     * @bodyParam   email    string  required
     * @bodyParam   password    string  required
     */
    function create_user(Request $request) {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|email|unique:users,email',
            'password' => 'required|string|min:6'
        ]);

        $user = new User([
            'id' => Str::uuid(),
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'password' => bcrypt($request->get('password')),
            'is_admin' => $request->get('is_admin'),
        ]);
        $user->save();
        return $this->sendResponse($user);
    }

    /**
     * @group User management
     * @header Authorization Bearer {token}
     * @authenticated
     * Create customer
     * @bodyParam   name    string  required
     * @bodyParam   email    string  required
     * @bodyParam   password    string  required
     */
    function create_customer(Request $request) {

    }
}
