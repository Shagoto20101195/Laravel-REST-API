<?php
// To generate this api.php file, run the following command:
// php artisan install:api

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\V1\CustomerController;
use App\Http\Controllers\api\V1\ReceiptController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::group(["prefix" => "v1", "namespace" => "App\Http\Controllers\api\V1"], function () {
    Route::apiResource('customers', CustomerController::class);
    Route::apiResource('receipts', ReceiptController::class);
});
