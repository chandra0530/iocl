<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\OrderController;

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::get('orders', [OrderController::class, 'index'])->name('orders');
Route::get('orders/{id}', [OrderController::class, 'show'])->name('order_details');
Route::get('recipt/{id}', [OrderController::class, 'showreciptdetails'])->name('recipt_details');