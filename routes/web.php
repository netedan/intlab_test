<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::controller(UserController::class)->prefix('users')->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('users');
    Route::get('/create', [UserController::class, 'create'])->name('user_create');
    Route::post('/', [UserController::class, 'store'])->name('user_store');
    Route::get('/{user}', [UserController::class, 'show'])->name('user_show');
    Route::get('/{user}/edit', [UserController::class, 'edit'])->name('user_edit');
    Route::put('/{user}', [UserController::class, 'update'])->name('user_update');
    Route::delete('/{user}', [UserController::class, 'destroy'])->name('user_destroy');
});

Route::controller(AuthController::class)->prefix('auth')->group(function () {
    Route::get('/', [AuthController::class, 'showLoginForm'])->name('auth');
    Route::post('/login', [AuthController::class, 'login'])->name('auth_login');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});

