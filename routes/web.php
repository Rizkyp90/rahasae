<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CatatanController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/kirim', function () {
    return view('kirim'); // Ini akan memuat file kirim.blade.php
});

Route::get('/tulis/{penerima}', function ($penerima) {
    return view('tulis', ['penerima' => $penerima]);
});

// Rute untuk MENYIMPAN data dari formulir (POST)
Route::post('/tulis/{penerima}', [CatatanController::class, 'store']);

Route::get('/sukses/{kode}', function ($kode) {
    return view('sukses', ['kode' => $kode]);
});

Route::get('/menu', function () {
    return view('menu');
});

// RUTE UNTUK MENAMPILKAN FORM PENCARIAN
Route::get('/cari', function() {
    return view('cari');
});

// RUTE UNTUK MEMPROSES PENCARIAN DAN MENAMPILKAN HASIL
Route::get('/hasil-pencarian', [CatatanController::class, 'search']);

// RUTE UNTUK MENAMPILKAN SATU CATATAN SECARA DETAIL
Route::get('/catatan/{catatan:kode_unik}', [CatatanController::class, 'show']);
