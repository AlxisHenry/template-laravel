<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\AuthController;

// Add custom routes below

Route::get('/', [HomepageController::class, 'homepage'])->name('home');
Route::get('/sign-in', [AuthController::class, 'SignIn'])->name('login');
Route::get('/sign-up', [AuthController::class, 'SignUp'])->name('register');
Route::get('/auth/{type}', function () { return abort('404'); });
Route::post('/auth/{type}', [AuthController::class, 'Auth'])->name('auth');
