<?php

use App\Http\Controllers\GameController;
use Illuminate\Support\Facades\Route;

Route::get('/', [GameController::class, 'index'])
    ->name('home');

Route::get('/game/{id}', [GameController::class, 'show'])
    ->whereNumber('id')
    ->name('games.show');

Route::get('/wishlist', [GameController::class, 'wishlist'])
    ->name('wishlist');

Route::get('/login', [GameController::class, 'login'])
    ->name('login');


