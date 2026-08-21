<?php

declare(strict_types=1);

use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;

// Route::get('/login');
Route::get('/register', [RegisterController::class, 'index'])->name('register.index');
Route::post('/register', [RegisterController::class, 'register'])->name('register.store');
