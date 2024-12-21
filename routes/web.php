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
use App\Http\Controllers\Admin\VerificationController;
use App\Http\Controllers\Admin\ReportController;
use App\Http\Controllers\Admin\AdminModerationController;
use App\Http\Controllers\Admin\JobModerationController as AdminJobModerationController;


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
Route::get('/admin/jobs', [AdminJobModerationController::class, 'index'])->name('admin.jobs');

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




// Route untuk Landing Page
Route::get('/', [LandingController::class, 'index'])->name('landing');

// Route untuk Penyedia Kerja Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// Route untuk Penyedia
Route::prefix('penyedia')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('penyedia.dashboard');
});

// Route untuk Admin Moderasi
Route::prefix('admin')->name('admin.')->group(function () {
    
    // Moderasi Pekerjaan
    Route::get('/jobs', [AdminJobModerationController::class, 'index'])->name('jobs.index');
    Route::get('/jobs/{id}', [AdminJobModerationController::class, 'show'])->name('jobs.show');
    Route::post('/jobs/{id}/approve', [AdminJobModerationController::class, 'approve'])->name('jobs.approve');
    Route::post('/jobs/{id}/reject', [AdminJobModerationController::class, 'reject'])->name('jobs.reject');

    // Verifikasi Pengguna
    Route::get('/verifications', [VerificationController::class, 'index'])->name('verifications.index');
    Route::get('/verifications/{id}', [VerificationController::class, 'show'])->name('verifications.show');
    Route::post('/verifications/{id}/approve', [VerificationController::class, 'approve'])->name('verifications.approve');
    Route::post('/verifications/{id}/reject', [VerificationController::class, 'reject'])->name('verifications.reject');

    // Penanganan Laporan
    Route::get('/reports', [ReportController::class, 'index'])->name('reports.index');
    Route::get('/reports/{id}', [ReportController::class, 'show'])->name('reports.show');
    Route::post('/reports/{id}/resolve', [ReportController::class, 'resolve'])->name('reports.resolve');
    Route::post('/reports/{id}/escalate', [ReportController::class, 'escalate'])->name('reports.escalate');
});