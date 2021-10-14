<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/prepareCheckout', function (Request $request) {
//     return view('welcome');
// });
Route::post('/prepareCheckout', [App\Http\Controllers\PaymentController::class, 'prepareCheckout']);
Route::get('form', [App\Http\Controllers\PaymentController::class, 'form']);
Route::get('payment-status', [App\Http\Controllers\PaymentController::class, 'payment_status']);
Route::post('check-payment-status', [App\Http\Controllers\PaymentController::class, 'check_payment_status']);
