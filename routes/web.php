<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnggotaController;


Route::get('/', function () {
    return view('home');
});
Route::get('/kelas', function () {
    return view('kelas'); 
});
Route::resource('anggota', AnggotaController::class);

Route::put('/anggota/{id}', [AnggotaController::class, 'update'])->name('anggota.update');





