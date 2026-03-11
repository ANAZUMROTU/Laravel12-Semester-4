<?php

use App\Http\Controllers\PortfolioController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes - Portfolio Ana (MVC Version)
|--------------------------------------------------------------------------
*/

// 1. Halaman Utama (Welcome) - Sekarang diatur oleh Controller
Route::get('/', [PortfolioController::class, 'index'])->name('home');

// 2. Halaman About
Route::get('/about', [PortfolioController::class, 'about'])->name('about');

// 3. Halaman Contact (Tampilan Form)
Route::get('/contact', [PortfolioController::class, 'contact'])->name('contact');

Route::get('/dashboard-ana', [PortfolioController::class, 'dashboard'])->name('dashboard');

// 4. Proses Simpan Pesan (Menerima data dari Form dan menyimpannya ke Database via Model)
Route::post('/contact', [PortfolioController::class, 'storeContact'])->name('contact.store');

// 5. Halaman Dashboard (Melihat daftar semua pesan yang masuk dari database)
Route::get('/dashboard-ana', [PortfolioController::class, 'dashboard'])->name('dashboard');