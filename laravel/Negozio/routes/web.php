<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\StoreController;
use Illuminate\Support\Facades\Route;

//stores= id,name,city,owner
//products= id,name,price,quantity,store_id

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::view('/','/home');
Route::resource('/stores',StoreController::class);


Route::resource('/products',ProductController::class);
Route::post('/products/compra',[ProductController::class,'compra']);
