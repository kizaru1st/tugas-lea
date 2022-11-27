<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminMasukController;

Route::get('register', [UserController::class, 'register'])->name('register');
Route::post('register', [UserController::class, 'register_action'])->name('register.action');
Route::get('login', [UserController::class, 'login'])->name('login');
Route::post('login', [UserController::class, 'login_action'])->name('login.action');


// Bendahara =================================================================
Route::group(['prefix' => 'admin'], function(){
    Route::resource('/dashboard', DashboardController::class);
    Route::resource('/data-masuk', AdminMasukController::class);
    Route::resource('/kegiatan', KegiatanController::class);
})->middleware('auth');

Route::get('password', [UserController::class, 'password'])->name('password');
Route::post('password', [UserController::class, 'password_action'])->name('password.action');
Route::get('logout', [UserController::class, 'logout'])->name('logout');