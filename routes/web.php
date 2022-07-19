<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GlobalController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;

/*
 * Routes without restrictions
 * */

# GlobalController doesn't use any middleware
Route::get('/', [GlobalController::class, 'Homepage'])->name('global.homepage');
Route::get('/project', [GlobalController::class, 'Project'])->name('global.project');
Route::get('/legals', [GlobalController::class, 'Legals'])->name('global.legals');
Route::get('/authors', [GlobalController::class, 'Authors'])->name('global.authors');

/*
 * Authenticate
 * */

# AuthController use the auth.system middleware
Route::get('/sign-in', [AuthController::class, 'SignIn'])->name('auth.login'); # Redirect to sign-in form
Route::get('/sign-up', [AuthController::class, 'SignUp'])->name('auth.register'); # Redirect to sign-up form
Route::post('/auth/{type}', [AuthController::class, 'Auth'])->name('auth.check.post'); # Check authenticate action
Route::get('/auth/{type}', function () { return abort('404'); })->name('auth.check.get'); # Abort GET method for this route

/*
 * User account
 * */

# UserController use multiples middleware
Route::get('/profile', [UserController::class, 'Profile'])->name('user.profile'); # Redirect to user profile
Route::get('/profile/settings', [UserController::class, 'SignIn'])->name('user.profile.settings'); # Settings of user account

# Add custom routes below
# For example: Route::get('uri', [NameController::class, 'functionName'])->name(routeName)
