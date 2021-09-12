<?php

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\APIPackageController;
use App\Http\Controllers\API\APIIndustryController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post("login",[AuthController::class,'login']);
Route::middleware('auth:sanctum')->group(function () {
    Route::post('users', [AuthController::class, 'create_user']);
    Route::delete('users', [AuthController::class, 'logout']);
    Route::apiResource('packages', APIPackageController::class, ['except' => ['show']]);
    Route::apiResource('industries', APIIndustryController::class, ['except' => ['show']]);
});
