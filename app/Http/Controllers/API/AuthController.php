<?php

namespace App\Http\Controllers\API;

use App\Http\Resources\AuthResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AuthController extends APIBaseController
{
    /**
     * @group Authentication
     * @bodyParam   email    string  required
     * @bodyParam   password    string  required
     */
    function login(Request $request)
    {
        $user= User::where('email', $request->email)->first();
        if (!$user || !Hash::check($request->password, $user->password)) {
            return $this->sendError('These credentials do not match our records.');
        }

        $token = $user->createToken(Str::uuid())->plainTextToken;
        $response = [
            'user' => new AuthResource($user),
            'token' => $token
        ];

        return $this->sendResponse($response);
    }

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

    function create_customer(Request $request) {

    }

    /**
     * @group Authentication
     */
    public function logout()
    {
        auth()->user()->tokens()->delete();
        return $this->sendResponse(true);
    }
}
