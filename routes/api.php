<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// api/v1
Route::group(['prefix' => 'v1', 'namespace' => 'App\Http\Controllers\Api\V1', 'middleware' => 'auth:sanctum'], function () {
    Route::apiResource('/providers', ProviderController::class);
    Route::apiResource('/services', ServiceController::class);
    Route::apiResource('/customers', CustomerController::class);
    Route::apiResource('/companies', CompanyController::class);

});


// Route::prefix('v1')->namespace('App\Http\Controllers\Api\V1')->group(function () {
//     Route::apiResource('/providers', ProviderController::class);
//     Route::apiResource('/services', ServiceController::class);
//     Route::apiResource('/customers', CustomerController::class);
//     Route::apiResource('/companies', CompanyController::class);
// });

// Route::apiResource('providers', 'ProviderController');
