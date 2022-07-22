<?php

use App\Http\Controllers\API\APICustomerController;
use App\Http\Controllers\API\APIDashboardController;
use App\Http\Controllers\API\APIExistingProviderController;
use App\Http\Controllers\API\APIForgotPasswordController;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\APIRoleController;
use App\Http\Controllers\API\APIUserController;
use App\Http\Controllers\API\APIPackageController;
use App\Http\Controllers\API\APIIndustryController;
use App\Http\Controllers\API\APIPipelineController;
use App\Http\Controllers\API\APITerritoryController;
use App\Http\Controllers\API\APIKPIActivityController;
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

// Authentication
Route::post("login", [AuthController::class, 'login']);
Route::post("sales/login", [AuthController::class, "login_as_sale"]);

Route::post('forgot-password', [APIForgotPasswordController::class, 'forgotPassword']);
Route::post('verify/pin', [APIForgotPasswordController::class, 'verifyPin']);
Route::post('reset-password', [APIForgotPasswordController::class, 'resetPassword']);

// Feature
Route::middleware('auth:sanctum')->group(function () {
    Route::get("profile", [APIUserController::class, "get_profile"]);
    Route::delete('logout', [AuthController::class, "logout"]);
    Route::get('roles', [APIRoleController::class, "get_roles"]);
    Route::post('users', [APIUserController::class, "create_user"]);
    Route::put('users/{id}', [APIUserController::class, "update_user"]);
    Route::delete('users', [APIUserController::class, "delete_user"]);
    Route::get("sale-admins", [APIUserController::class, "get_sale_admins"]);
    Route::delete("sale-admins/{id}", [APIUserController::class, "delete_sale_admin"]);
    Route::get("dsms", [APIUserController::class, "get_dsms"]);
    Route::get("sale-executives", [APIUserController::class, "get_sales"]);
    Route::apiResource('packages', APIPackageController::class);
    Route::apiResource('industries', APIIndustryController::class);
    Route::apiResource('territories', APITerritoryController::class);
    Route::apiResource('kpi-activities', APIKPIActivityController::class);
    Route::apiResource('pipelines', APIPipelineController::class);
    Route::apiResource("existing-providers", APIExistingProviderController::class);
});

//
Route::middleware('auth:sanctum')->group(function () {
    Route::apiResource('sales/customers', APICustomerController::class);
    Route::get("sales/sales-pipeline", [APICustomerController::class, "get_sales_pipeline"]);
});

// Dashboard
Route::middleware('auth:sanctum')->group(function () {
    Route::get("dashboard/summary", [APIDashboardController::class, "dashboard_summary"]);
    Route::get("dashboard/export", [APIDashboardController::class, "export_excel_report"]);
    Route::get("dashboard/sales-summary", [APIDashboardController::class, "getSalesSummary"]);
    Route::get("dashboard/sale-leads", [APIDashboardController::class, "getSaleLeads"]);
});
