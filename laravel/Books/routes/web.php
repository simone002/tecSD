<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BooksController;

Route::get('/', function () {
    return view('index');
});

Route::get('/update', function () {
    return view('update');
});

Route::get('/read', [BooksController::class, 'read']);

Route::post('/insert', [BooksController::class, 'insert']);

Route::put('/update', [BooksController::class, 'update']);

Route::delete('/delete', [BooksController::class, 'delete']);
