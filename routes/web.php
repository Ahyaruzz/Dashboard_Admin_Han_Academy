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
    Route::get('/kelas', [AnggotaController::class, 'kelas'])->name('kelas');
    Route::get('/get-coaches/{kelasId}', [AnggotaController::class, 'getCoachesByClass']);
    
    // Anggota routes
    Route::post('/anggota', [AnggotaController::class, 'store'])->name('anggota.store');
    Route::get('/anggota', [AnggotaController::class, 'index'])->name('anggota.index');
    Route::delete('/anggota/{id}', [AnggotaController::class, 'destroy'])->name('anggota.destroy');
    Route::put('/anggota/{id}', [AnggotaController::class, 'update'])->name('anggota.update'); // Gunakan PUT method
    Route::post('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');

});