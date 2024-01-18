<?php

use App\Http\Controllers\FilmsController;
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

Route::get('/read', [FilmsController::class, 'read']);

Route::post('/create', [FilmsController::class, 'create']);

Route::post('/form', [FilmsController::class, 'form']);

Route::post('/update', [FilmsController::class, 'update']);

