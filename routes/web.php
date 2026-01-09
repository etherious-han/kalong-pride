<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\GaleriController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Routes yang sudah ada
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/gallery', [HomeController::class, 'gallery'])->name('gallery');
Route::get('/members', [HomeController::class, 'members'])->name('members');

// Route untuk galeri lengkap (TAMBAHKAN INI)
Route::get('/galeri-lengkap', [GaleriController::class, 'index'])->name('galeri.lengkap');
Route::get('/galeri/{id}', [GaleriController::class, 'show'])->name('galeri.detail'); // Optional untuk detail