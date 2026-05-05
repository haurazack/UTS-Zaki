<?php

use Illuminate\Support\Facades\Route;

// IMPORT CONTROLLER
use App\Http\Controllers\KurikulumControllerWendi;
use App\Http\Controllers\KelasControllerWendi;
use App\Http\Controllers\JadwalControllerWendi;
use App\Http\Controllers\NilaiControllerWendi;

// =========================
// Branda
// =========================
Route::get('/', function () {
    return view('beranda');
});


// =========================
// KURIKULUM
// =========================
Route::get('/kurikulum', [KurikulumControllerWendi::class, 'index']);

// =========================
// KELAS
// =========================
Route::get('/kelas', [KelasControllerWendi::class, 'index']);

// =========================
// JADWAL
// =========================
Route::get('/jadwal', [JadwalControllerWendi::class, 'index']);

// =========================
// NILAI
// =========================
Route::get('/nilai', [NilaiControllerWendi::class, 'index']);
