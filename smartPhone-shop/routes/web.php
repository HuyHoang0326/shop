<?php

use App\Http\Controllers\TestController;
use Illuminate\Routing\Route as RoutingRoute;
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
Route::get('/login', ['as'=>'login', 'uses' => 'Auth\LoginControlller@getLogin']);
Route::post('/login', ['as'=>'login', 'uses' => 'Auth\LoginControlller@postLogin']);

Route::middleware(['auth'])->group(function(){
    Route::get('/test','TestController@index')->name('route_BackEnd_test_index');
    Route::match(['get','post'],'/test/add','TestController@add');
    Route::get('/test/detail/{id}','TestController@detail')->name('route_Backend_Test_Detail');
    Route::post('/test/update/{id}','TestController@update')->name('route_Backend_Test_Update');
    Route::get('/admin/user','TestController@userList')->name('route_Backend_userList');
});

Route::get('/client_main',function(){ return view('client/client_main'); })->name('home');
Route::get('/contact',function(){ return view('client/contact'); })->name('contact');
Route::get('/shop',function(){ return view('client.shop-fullwidth'); })->name('shop');
Route::get('/about',function(){ return view('client.about'); })->name('about');
Route::get('/blog',function(){ return view('client.blog'); })->name('blog');
Route::get('/wishlist',function(){ return view('client.wishlist'); })->name('wishlist');




