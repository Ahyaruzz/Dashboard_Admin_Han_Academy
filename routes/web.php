<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\AdminController;
use App\Models\Admin;

Route::middleware(['web'])->group(function () {
    Route::get('/', [AdminController::class, 'login'])->name('login');
    Route::post('/post-login-admin', [AdminController::class, 'AdminLogin'])->name('admin.login.post');

    Route::middleware(['auth:admin'])->group(function () {
        Route::resource('anggota', AnggotaController::class);
        Route::put('/anggota/{id}', [AnggotaController::class, 'update'])->name('anggota.update');
        Route::get('/kelas', [AnggotaController::class, 'kelas'])->name('kelas');
    });
});




