<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;


Route::middleware('guest')->group(function () {
    Route::get('/register', [RegisterController::class, 'show'])->name('register');
    Route::post('/register', [RegisterController::class, 'store']);

    
});


Route::middleware('auth')->group(function () {
    Route::get('/dashboard', fn () => Inertia::render('Dashboard'))->name('dashboard');
    Route::post('/logout', [LoginController::class, 'destroy'])->name('logout');
});
