<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArsipController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\KategoriController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

    Route::get('/', [AboutController::class,'index'])->name('about');
    Route::resource('kategori', KategoriController::class);
    Route::resource('arsip', ArsipController::class);
    Route::get('arsip/show/{id}', [ArsipController::class, 'show'])->name('arsip.show');
    Route::get('arsip/download/{id}', [ArsipController::class, 'download'])->name('arsip.download');
    Route::get('arsip/create', [ArsipController::class, 'create'])->name('arsip.create');
    Route::get('kategori/create', [KategoriController::class, 'create'])->name('kategori.create');
    Route::get('kategori/edit/{id}', [KategoriController::class, 'edit'])->name('kategori.edit');

    Route::get('arsip/edit/{id}', [ArsipController::class, 'edit'])->name('arsip.edit');
    Route::put('arsip/update/{id}', [ArsipController::class, 'update'])->name('arsip.update');
    Route::patch('arsip/update/{id}', [ArsipController::class, 'update'])->name('arsip.update');
