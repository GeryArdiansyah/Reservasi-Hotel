<?php

use App\Http\Controllers\BerandaController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\MasukController;
use App\Http\Controllers\TentangKamiController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('LandingPage');
});

// Route untuk Beranda
Route::get('/Beranda', [BerandaController::class, 'index'])->name('beranda');

// Route untuk lihat daftar Kamar
Route::get('/LihatKamar', [BerandaController::class, 'index1'])->name('kamar');

// Route untuk lihat Kamar junior suite
Route::get('/Kamar Junior', [BerandaController::class, 'index2'])->name('kamar');

// Route untuk lihat Kamar Executive suite
Route::get('/Kamar Executive', [BerandaController::class, 'index3'])->name('kamar');

// Route untuk lihat Kamar precidential suite
Route::get('/Kamar Precidential', [BerandaController::class, 'index4'])->name('kamar');

// Route untuk lihat Kamar Deluxe twin
Route::get('/Kamar Deluxe', [BerandaController::class, 'index5'])->name('kamar');

// Route untuk lihat Kamar Premiere king
Route::get('/Kamar Premiere', [BerandaController::class, 'index6'])->name('kamar');

// Route untuk lihat Kamar Premiere king
Route::get('/Kamar Premiere Twin', [BerandaController::class, 'index7'])->name('kamar');

// Route untuk Kontak
Route::get('/Kontak', [KontakController::class, 'index'])->name('Kontak');

// Route untuk Tentang Kami
Route::get('/TentangKami', [TentangKamiController::class, 'index'])->name('tentangkami');

// Route untuk Tentang Kami
Route::get('/Masuk', [MasukController::class, 'index'])->name('Masuk');
Route::post('/Masuk', [MasukController::class, 'processLogin'])->name('processLogin');
