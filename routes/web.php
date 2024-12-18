<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\AdminManagementController;
use App\Http\Controllers\ActivityMonitoringController;
use App\Http\Controllers\PolicyManagementController;
use App\Http\Controllers\FinancialMonitoringController;
use App\Http\Controllers\JobModerationController;
use App\Http\Controllers\PaymentValidationController;
use App\Http\Controllers\ReportHandlingController;
use App\Http\Controllers\UserVerificationController;
use App\Http\Controllers\OperationsController;
use App\Http\Controllers\LandingController;


Route::get('/jobs', [JobController::class, 'index'])->name('jobs.index');
Route::get('/jobs/{id}', [JobController::class, 'show'])->name('jobs.show');



// Route untuk halaman login
Route::get('/login', function () {
    return view('auth.login'); // Pastikan sesuai dengan lokasi file
})->name('login');

// Route untuk halaman login
Route::get('/signup', function () {
    return view('auth.signup'); // Pastikan sesuai dengan lokasi file
})->name('signup');

// Route untuk proses login (POST)
Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::get('/', [LandingController::class, 'index']); // Menu Loker


Route::middleware(['auth'])->group(function () {
    // Single route to redirect to appropriate dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});


Route::post('logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/management-admin', [AdminManagementController::class, 'index'])->name('admin.management');
Route::get('/management-admin/create', [AdminManagementController::class, 'create'])->name('admin.create');
Route::post('/management-admin/store', [AdminManagementController::class, 'store'])->name('admin.store');

Route::get('/monitoring-aktivitas', [ActivityMonitoringController::class, 'index'])->name('activity.monitoring');
Route::get('/pengelola-kebijakan', [PolicyManagementController::class, 'index'])->name('policy.management');
Route::get('/monitoring-keuangan', [FinancialMonitoringController::class, 'index'])->name('financial.monitoring');

// Rute untuk Dashboard
Route::get('/admin/dashboard', [DashboardController::class, 'admin'])->name('admin.dashboard');

// Rute untuk Moderasi Pekerjaan
Route::get('/admin/jobs', [JobModerationController::class, 'index'])->name('admin.jobs');

// Rute untuk Validasi Pembayaran
Route::get('/admin/payments', [PaymentValidationController::class, 'index'])->name('admin.payments');

// Rute untuk Penanganan Laporan
Route::get('/admin/reports', [ReportHandlingController::class, 'index'])->name('admin.reports');

// Rute untuk Verifikasi Pengguna
Route::get('/admin/users', [UserVerificationController::class, 'index'])->name('admin.users');

/// Tambahkan route untuk pengelolaan data operasional
Route::get('admin/operations', [OperationsController::class, 'index'])->name('admin.operations');

Route::get('/penyedia-kerja', [LandingController::class, 'penyediaKerja']); // Menu Penyedia
Route::get('/pencari-kerja', [LandingController::class, 'pencariKerja']); // Menu Pencari
Route::get('/job/{id}', [LandingController::class, 'show'])->name('jobs.show');
Route::get('/dashboard-penyedia', [LandingController::class, 'penyedia'])->name('dashboard-penyedia');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::post('/signup', [AuthController::class, 'signup']); // Proses registrasi

// Rute untuk memasang pekerjaan
Route::get('/penyedia/pasang-pekerjaan', [DashboardController::class, 'pasangPekerjaan'])->name('penyedia.pasang_pekerjaan');
Route::post('/penyedia/store-pekerjaan', [DashboardController::class, 'storePekerjaan'])->name('penyedia.store_pekerjaan');
Route::post('/penyedia/store-pekerjaan', [DashboardController::class, 'storePekerjaan'])->name('penyedia.store_pekerjaan');
// Rute untuk pembayaran fee
Route::get('/penyedia/bayar-fee', [DashboardController::class, 'bayarFee'])->name('penyedia.bayar');
// Rute untuk menyimpan pembayaran fee
Route::post('/penyedia/store-bayar-fee', [DashboardController::class, 'storeBayarFee'])->name('penyedia.store_bayar_fee');
// Rute untuk tinjau proposal
Route::get('/penyedia/tinjau-proposal', [DashboardController::class, 'tinjauProposal'])->name('penyedia.tinjau');

// Rute untuk memilih pekerja
Route::get('/penyedia/pilih-pekerja/{id}', [DashboardController::class, 'pilihPekerja'])->name('penyedia.pilih');
//konfirmasi
Route::get('/penyedia/konfirmasi-selesai', 'Controller@konfirmasiSelesai')->middleware('verify.csrf.token');


Route::group(['middleware' => 'web'], function () {
    // Rute yang memerlukan session
});
