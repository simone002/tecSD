<?php

use App\Http\Controllers\BooksController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('index');
});

Route::get('/read', [BooksController::class, 'read']);

Route::post('/create', [BooksController::class, 'create']);

Route::post('/form', [BooksController::class, 'form']);

Route::post('/update', [BooksController::class, 'update']);

