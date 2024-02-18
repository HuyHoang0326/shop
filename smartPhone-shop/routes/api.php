<?php

use App\Http\Controllers\Api\ApiController;
use App\Http\Controllers\Api\ApiOrderController;
use App\Http\Controllers\api\OrderOriginApiController;
use App\Http\Controllers\api\ApiProductController as productApi;
use App\Http\Controllers\Api\ApiSaleController;
use App\Http\Controllers\auth\LoginClientController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Spatie\FlareClient\Api;

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
Route::middleware(['client'])->group(function(){
    Route::post('order_origin/add',[OrderOriginApiController::class,'store'])->name('route_api_Backend_Order_Origin_Add');
});
// Route::prefix('product')->group(function(){
//     Route::get('/',[ApiController::class,'index']);
//     Route::post('/',[ApiController::class,'store']);
//     Route::get('/{id}',[ApiController::class,'show']);
//     Route::put('/{id}',[ApiController::class,'update']);
//     Route::patch('/{id}',[ApiController::class,'update']);
// });

Route::get('sync-data-order/{id}',[ApiOrderController::class,'syncDataOder']);
Route::patch('update-status-order/{id}/{status}',[ApiOrderController::class,'patchStatus']);

Route::get('sync-data-sale/{id}',[ApiSaleController::class,'syncDataSale']);
Route::patch('update-status-sale-origin/{id}/{status}',[ApiSaleController::class,'patchSaleOrigin']);

Route::patch('update-status-sale/{id}/{status}',[ApiSaleController::class,'patchSale']);
Route::get('sync-data-sale-origin/{id}',[ApiSaleController::class,'syncStatusSale']);