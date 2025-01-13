<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\AdminController;

Route::get('/', [AdminController::class, 'login'])->name('login');
Route::post('/post-login-admin', [AdminController::class, 'AdminLogin'])->name('admin.login.post');

Route::middleware(['auth:admin'])->group(function () {
    Route::get('/home', [AnggotaController::class, 'home'])->name('anggota.home');
    Route::resource('anggota', AnggotaController::class);
    Route::get('/kelas', [AnggotaController::class, 'kelas'])->name('kelas');
});