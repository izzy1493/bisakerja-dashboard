<?php

use Illuminate\Support\Facades\Route;
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

// routes/web.php

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

// Route untuk authenticate berdasarkan role
Route::get('/authenticate/{role}', function ($role) {
    if ($role === 'admin') {
        return redirect()->route('admin.dashboard'); // Redirect ke halaman admin
    } elseif ($role === 'super_admin') {
        return redirect()->route('superadmin.dashboard'); // Redirect ke halaman super admin
    }

    // Jika role tidak valid
    abort(403, 'Unauthorized');
})->name('authenticate');


Route::get('superadmin/dashboard', [DashboardController::class, 'superadmin'])->name('superadmin.dashboard');

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

Route::get('/', [LandingController::class, 'index']); // Menu Loker
Route::get('/penyedia-kerja', [LandingController::class, 'penyediaKerja']); // Menu Penyedia
Route::get('/pencari-kerja', [LandingController::class, 'pencariKerja']); // Menu Pencari
Route::get('/job/{id}', [LandingController::class, 'show'])->name('jobs.show');
Route::get('/dashboard-penyedia', [LandingController::class, 'penyedia'])->name('dashboard-penyedia');


