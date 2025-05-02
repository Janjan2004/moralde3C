<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Admin\HomeController;


Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::prefix('admin')->middleware('admin')->group(function() {
	Route::get('/', [HomeController::class, 'index'])->name('admin.home');
	Route::get('/users', [HomeController::class, 'users'])->name('admin.users');
});

Route::prefix('user')->middleware('user')->group(function () {
	Route::get('/', [UserController::class, 'index'])->name('home');
});
