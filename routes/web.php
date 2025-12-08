<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginUserController;
use App\Http\Controllers\RegisterUserController;

Route::get('/', [PostController::class, 'index'])->middleware('auth');
Route::get('/posts/{post:slug}', [PostController::class, 'show'])->name('posts.show');

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


Route::get('post/create', [UserController::class, 'create'])->name('posts.create');
