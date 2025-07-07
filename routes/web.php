<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\DashboardController;

Route::resource('pasiens', PasienController::class);
Route::resource('dokters', DokterController::class);
Route::resource('pendaftarans', PendaftaranController::class);
Route::post('pendaftarans/{pendaftaran}/approve', [PendaftaranController::class, 'approve'])->name('pendaftarans.approve');
Route::post('pendaftarans/{pendaftaran}/reject', [PendaftaranController::class, 'reject'])->name('pendaftarans.reject');
Route::get('/', [DashboardController::class, 'index'])->name('dashboard');