<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PasienController;

Route::get('/', [DashboardController::class, 'show']);

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/admin', [AdminController::class, 'index'])->name('admin');

Route::get('/admin/pasien', [PasienController::class, 'index'])->name('admin.pasien');

Route::get('/admin/kelurahan', [PasienController::class, 'kelurahan'])->name('admin.kelurahan');

Route::get('/admin/unit_kerja', [PasienController::class, 'uk'])->name('admin.uk');

Route::get('/admin/paramedik', [PasienController::class, 'paramedik'])->name('admin.paramedik');

Route::get('/admin/periksa', [PasienController::class, 'periksa'])->name('admin.periksa');

Route::post('/admin', [PasienController::class, 'store']);
