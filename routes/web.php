<?php

use App\Http\Controllers\OrderController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProviderController;

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
    return view('auth/login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/customer' , CustomerController::class);
Route::resource('/product' , ProductController::class);
Route::resource('/provider' , ProviderController::class);
Route::get('orders/{order}/generateInvoice', [OrderController::class, 'generateInvoice'])->name('orders.generateInvoice');
Route::resource('orders', OrderController::class);
