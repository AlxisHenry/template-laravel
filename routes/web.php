<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\LoginController;

// Add custom routes below

Route::get('/', [HomepageController::class, 'homepage'])->name('home');
Route::get('/login', [LoginController::class, 'login'])->name('login');
