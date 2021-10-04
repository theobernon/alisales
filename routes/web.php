<?php

use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\OrderController;

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
    return redirect(route('login'));
});

Auth::routes();

Route::middleware('auth')->group(function(){
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource('customer', CustomerController::class);
    Route::get('customer/{customer}/delete',[CustomerController::class,'delete'])->name('customer.delete');
    Route::get('customer/{customer}/createOrder',[CustomerController::class,'createOrder'])->name('customer.createOrder');
    Route::post('customer/{customer}/storeOrder',[CustomerController::class,'storeOrder'])->name('customer.storeOrder');

    Route::resource('order',OrderController::class);
    Route::get('order/{order}/delete',[OrderController::class,'delete'])->name('order.delete');


//    Route::resource('order',\App\Http\Controllers\OrderController::class);
//    Route::get('order/{customer}/createOrder',[CustomerController::class,'create']);

});







