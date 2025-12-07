<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginUserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterUserController;

Route::get('/', [PostController::class, 'index'])->middleware('auth');
Route::get('/post', [PostController::class, 'create']);

Route::controller(RegisterUserController::class)
        ->prefix('register')
        ->name('register.')
        ->group(function() {
    Route::get('/', 'create')->name('create');
    Route::post('/', 'store')->name('store');
});

Route::controller(LoginUserController::class)
        ->prefix('login')
        ->name('login.')
        ->group(function() {
    Route::get('/', 'create')->name('create');
    Route::post('/', 'store')->name('store');
});
