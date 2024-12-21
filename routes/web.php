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

// Route untuk halaman login
Route::get('/login', function () {
    return view('auth.login'); // Pastikan sesuai dengan lokasi file
})->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('loginSubmit');
// Rute untuk dashboard
Route::middleware('auth')->get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');


// Route untuk halaman SIgn Up
Route::get('/signup', function () {
    return view('auth.signup'); // Pastikan sesuai dengan lokasi file
})->name('signup');


// Landing Awal
Route::get('/', [LandingController::class, 'index']); // Menu Loker

Route::get('/penyedia-kerja', [LandingController::class, 'penyediaKerja']); // Menu Penyedia
Route::get('/pencari-kerja', [LandingController::class, 'pencariKerja']); // Menu Pencari


Route::get('/jobs', [JobController::class, 'index'])->name('jobs.index');
Route::get('/jobs/{id}', [JobController::class, 'show'])->name('jobs.show');


// Dashboard Awal (All role)
Route::middleware(['auth'])->group(function () {
    // Single route to redirect to appropriate dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});


// Suoer Admin
Route::middleware(['auth', 'role:superadmin'])->group(function () {
    // Single route to redirect to appropriate dashboard
    Route::get('/management-admin', [AdminManagementController::class, 'index'])->name('admin.management');
    Route::get('/management-admin/create', [AdminManagementController::class, 'create'])->name('admin.create');
    Route::post('/management-admin/store', [AdminManagementController::class, 'store'])->name('admin.store');
    
    Route::get('/monitoring-aktivitas', [ActivityMonitoringController::class, 'index'])->name('activity.monitoring');
    Route::get('/pengelola-kebijakan', [PolicyManagementController::class, 'index'])->name('policy.management');
    Route::get('/monitoring-keuangan', [FinancialMonitoringController::class, 'index'])->name('financial.monitoring');

});

// Admin
Route::middleware(['auth', 'role:admin'])->group(function () {
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
});


// Penyedia
Route::middleware(['auth', 'role:penyedia'])->group(function () {
    Route::get('/list-pekerjaan', [JobController::class, 'showPekerjaan'])->name('list-pekerjaan');
    Route::get('/list-lamaran', [JobController::class, 'showlamaran'])->name('list-lamaran');
    
    // Tambahkan rute untuk form pasang pekerjaan
    Route::get('/dashboard/penyedia', [JobController::class, 'create'])->name('penyedia.create'); // Halaman form
    Route::post('/dashboard/penyedia', [JobController::class, 'store'])->name('penyedia.store'); // Proses form
});



Route::post('logout', [AuthController::class, 'logout'])->name('logout');



Route::get('/job/{id}', [LandingController::class, 'show'])->name('jobs.show');
Route::get('/dashboard-penyedia', [LandingController::class, 'penyedia'])->name('dashboard-penyedia');


Route::group(['middleware' => 'web'], function () {
    // Rute yang memerlukan session
});
