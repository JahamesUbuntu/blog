<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::view('/login', 'auth.login')
        ->name('login');

    Route::post('/login', [AuthController::class, 'login']);

    Route::view('/register', 'auth.register')
        ->name('register');

    Route::post('/register', [AuthController::class, 'register']);
});

Route::delete('/logout', [AuthController::class, 'logout'])
    ->name('logout')
    ->middleware('auth:web');

Route::prefix('/posts')
    ->controller(PostController::class)
    ->middleware('auth:web')
    ->group(function () {
        Route::get('/', 'index')
            ->name('posts.index');

        Route::get('/create', 'create')
            ->name('posts.create');

        Route::post('/', 'store')
            ->name('posts.store');

        Route::get('/{post}/edit', 'edit')
            ->name('posts.edit');

        Route::match(['patch', 'put'], '/{post}', 'update')
            ->name('posts.update');

        Route::delete('/{post}', 'destroy')
            ->name('posts.destroy');
    });

Route::redirect('/', '/posts/', 307)
    ->middleware('auth:web');
