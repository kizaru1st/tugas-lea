<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminMasukController;

Route::get('/login', [LoginController::class, 'create'])->name('login.create');
Route::post('/login', [LoginController::class, 'store'])->name('login.store');
Route::get('/register', [RegisterController::class, 'create'])->name('register.create');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');



// Bendahara =================================================================
Route::group(['prefix' => 'admin'], function(){
    Route::resource('/dashboard', DashboardController::class);
    Route::resource('/data-masuk', AdminMasukController::class);
    Route::resource('/kegiatan', KegiatanController::class);
});