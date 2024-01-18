<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\GameController;

Route::view('/', 'home');
Route::resource('/games', GameController::class);
Route::post('/games/help_show', [GameController::class, 'help_show']);
Route::post('/games/maggiora', [GameController::class, 'maggiora']);
Route::delete('/games', [GameController::class, 'destroyAll']);

Route::resource('/players', PlayerController::class);
Route::post('/players/help_show', [PlayerController::class, 'help_show']);
Route::delete('/players', [PlayerController::class, 'destroyAll']);


