<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/kelas', function () {
    return view('kelas'); 
});
Route::get('/anggota', function () {
    return view('anggota');
});
Route::post('/anggota', [AnggotaController::class, 'store'])->name('anggota.store');

