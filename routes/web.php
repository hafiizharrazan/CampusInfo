<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdiController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('beranda');
Route::get('/program-studi', [ProdiController::class, 'index'])->name('prodi');
Route::get('/kontak', [HomeController::class, 'kontak'])->name('kontak');