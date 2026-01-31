<?php

use App\Http\Controllers\Api\FacebookTrackingController;
use App\Http\Controllers\Api\Payment\PaypalController;
use App\Http\Controllers\Api\Payment\StripeController;
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

Route::post('/facebook-tracking', [FacebookTrackingController::class, 'store'])->name('facebook-tracking.store');

Route::post('/paypal/orders', [PaypalController::class, 'checkout']);
Route::post('/paypal/orders/{orderId}/capture', [PaypalController::class, 'capture']);
Route::post('/stripe/webhook', [StripeController::class, 'webhook']);
