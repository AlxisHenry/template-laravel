<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

// Add custom routes below

Route::get('/', [MainController::class, 'main'])->name('homepage');
Route::get('/login', [MainController::class, 'main'])->name('homepage');
