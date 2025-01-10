<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnggotaController;


Route::resource('anggota', AnggotaController::class);
Route::put('/anggota/{id}', [AnggotaController::class, 'update'])->name('anggota.update');
Route::get('/', [AnggotaController::class, 'home'])->name('home');
Route::get('/kelas', [AnggotaController::class, 'kelas'])->name('kelas');





