<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\AdminController;

Route::get('/', [AdminController::class, 'login'])
    ->name('login')
    ->middleware('guest:admin'); 

Route::post('/post-login-admin', [AdminController::class, 'AdminLogin'])->name('admin.login.post');

Route::middleware(['auth:admin'])->group(function () {
    Route::get('/dashboard', [AnggotaController::class, 'home'])->name('anggota.home');
    Route::resource('anggota', AnggotaController::class);
    Route::get('/kelas', [AnggotaController::class, 'kelas'])->name('kelas');
    Route::post('/logout', [AdminController::class, 'logout'])->name('admin.logout');
    Route::get('/get-coaches/{kelasId}', [AnggotaController::class, 'getCoachesByClass']);
});