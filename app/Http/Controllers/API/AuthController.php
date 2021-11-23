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
        $user= User::where('email', $request->email)->first();
        if (!$user || !Hash::check($request->password, $user->password)) {
            return $this->sendError('These credentials do not match our records.');
        }

        $token = $user->createToken(Str::uuid())->plainTextToken;
        $response = [
            'user' => new UserResource($user),
            'token' => $token
        ];
        return $this->sendResponse($response);
    }

    public function logout()
    {
        auth()->user()->tokens()->delete();
        return $this->sendResponse(true);
    }
}
