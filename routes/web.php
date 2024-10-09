<?php

use App\Http\Controllers\SalesOrderController;
use App\Http\Controllers\SellController;
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

Route::resource('sells', 'SellController')->except(['show']);
Route::resource('sells', SellController::class)->except(['show']);
Route::resource('sales-order', SalesOrderController::class)->only(['index']);
