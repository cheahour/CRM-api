<?php

namespace App\Http\Controllers\API;

use App\Http\Resources\User\UserResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AuthController extends APIBaseController
{
    function login(Request $request) {
        $request->validate([
            "email" => "required|string",
            "password" => "required|string",
        ]);
        $user= User::where('email', $request->email)->first();
        if (!$user || !Hash::check($request->password, $user->password)) {
            return $this->send_error(__("custom_error.login_failed"));
        }

        $token = $user->createToken(Str::uuid())->plainTextToken;
        $response = [
            'user' => new UserResource($user),
            'token' => $token
        ];
        return $this->send_response($response);
    }

    public function login_as_sale(Request $request) {
        $request->validate([
            "email" => "required|string",
            "password" => "required|string",
        ]);
        $email = $request->get("email");
        $password = $request->get("password");
        if ($email != null && $password != null) {
            $user= User::where('email', $request->email)->first();
            if ($user && Hash::check($request->password, $user->password) && ($user->role->name == "Sale")) {
                $token = $user->createToken(Str::uuid())->plainTextToken;
                $response = [
                    'user' => new UserResource($user),
                    'token' => $token
                ];
                return $this->send_response($response);
            }
            return $this->send_error(__("custom_error.login_failed"));
        }
        return $this->send_error(__("custom_error.text_field_required"));
    }

    public function logout()
    {
        auth()->user()->tokens()->delete();
        return $this->send_response(true);
    }
}
