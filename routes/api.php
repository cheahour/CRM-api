<?php

use App\Http\Controllers\API\APICustomerController;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\APIRoleController;
use App\Http\Controllers\API\APIUserController;
use App\Http\Controllers\API\APIPackageController;
use App\Http\Controllers\API\APIIndustryController;
use App\Http\Controllers\API\APIPipelineController;
use App\Http\Controllers\API\APITerritoryController;
use App\Http\Controllers\API\APIKpiActivityController;
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

Route::post("login",[AuthController::class,'login']);
Route::post("sales/login", [AuthController::class, "login_as_sale"]);
Route::middleware('auth:sanctum')->group(function () {
    Route::get("profile", [APIUserController::class, "get_profile"]);
    Route::delete('logout', [AuthController::class, "logout"]);
    Route::get('roles', [APIRoleController::class, "get_roles"]);
    Route::post('users', [APIUserController::class, "create_user"]);
    Route::put('users/{id}', [APIUserController::class, "update_user"]);
    Route::delete('users/{id}', [APIUserController::class, "delete_user"]);
    Route::get("sale-admins", [APIUserController::class, "get_sale_admins"]);
    Route::get("dsms", [APIUserController::class, "get_dsms"]);
    Route::get("sale-executives", [APIUserController::class, "get_sales"]);
    Route::apiResource('packages', APIPackageController::class);
    Route::apiResource('industries', APIIndustryController::class);
    Route::apiResource('territories', APITerritoryController::class);
    Route::apiResource('kpi-activities', APIKpiActivityController::class);
    Route::apiResource('pipelines', APIPipelineController::class);
});

Route::middleware('auth:sanctum')->group(function () {
    Route::apiResource('sales/customers', APICustomerController::class);
    Route::get("sales/sales-pipeline", [APICustomerController::class, "get_sales_pipeline"]);
});
