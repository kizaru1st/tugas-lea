<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminMasukController;
use App\Http\Controllers\AdminKeluarController;

Route::get('/login', [LoginController::class, 'create'])->name('login');
Route::post('/login', [LoginController::class, 'store'])->name('login.store');
Route::get('/register', [RegisterController::class, 'create'])->name('register.create');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');
Route::post('logout', LogoutController::class)->name('logout.invoke')->middleware('auth');



// Bendahara =================================================================
Route::middleware('auth')->group( function(){
    Route::resource('/dashboard', DashboardController::class);
    Route::resource('/data-masuk', AdminMasukController::class);
    Route::resource('/kegiatan', KegiatanController::class);
    Route::resource('/data-keluar', AdminKeluarController::class);
});
