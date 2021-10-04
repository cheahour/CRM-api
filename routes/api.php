<?php

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\APIPackageController;
use App\Http\Controllers\API\APIIndustryController;
use App\Http\Controllers\API\APIPipelineController;
use App\Http\Controllers\API\APITerritoryController;
use App\Http\Controllers\API\APIKpiActivityController;
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
    Route::apiResource('packages', APIPackageController::class);
    Route::apiResource('industries', APIIndustryController::class);
    Route::apiResource('territories', APITerritoryController::class);
    Route::apiResource('kpi-activities', APIKpiActivityController::class);
    Route::apiResource('pipelines', APIPipelineController::class);
});
