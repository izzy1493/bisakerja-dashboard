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
use App\Http\Controllers\PencariController;
use Illuminate\Support\Facades\Auth;

// ========================================
// Rute untuk Authentication
// ========================================
Route::get('/login', function () {
    return view('auth.login'); // Pastikan sesuai dengan lokasi file
})->name('login');

Route::post('/login', [AuthController::class, 'login'])->name('loginSubmit');

Route::get('/signup', function () {
    return view('auth.signup'); // Pastikan sesuai dengan lokasi file
})->name('signup');

Route::post('logout', [AuthController::class, 'logout'])->name('logout');

Route::get('logintest', function () {
    Auth::loginUsingId(2);
    return true;
});

// ========================================
// Rute untuk Landing Page
// ========================================
Route::get('/', [LandingController::class, 'index']);
Route::get('/dashboard-page', [LandingController::class, 'page'])->name('dashboard-page');
Route::get('/penyedia-kerja', [LandingController::class, 'penyediaKerja']);
Route::get('/pencari-kerja', [LandingController::class, 'pencariKerja']);
Route::get('/job/{id}', [LandingController::class, 'show'])->name('jobs.show');
Route::get('/dashboard-penyedia', [LandingController::class, 'penyedia'])->name('dashboard-penyedia');

// ========================================
// Rute untuk Job Management
// ========================================
Route::get('/jobs', [JobController::class, 'index'])->name('jobs.index');
Route::get('/jobs/{id}', [JobController::class, 'show'])->name('jobs.show');

// ========================================
// Rute untuk Dashboard Umum
// ========================================
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});

// ========================================
// Rute untuk Superadmin
// ========================================
Route::middleware(['auth', 'role:superadmin'])->group(function () {
    Route::get('/dashboard/superadmin', [DashboardController::class, 'superadmin'])->name('dashboard.superadmin');
    Route::get('/management-admin', [AdminManagementController::class, 'index'])->name('admin.management');
    Route::get('/management-admin/create', [AdminManagementController::class, 'create'])->name('admin.create');
    Route::post('/management-admin/store', [AdminManagementController::class, 'store'])->name('admin.store');

    Route::get('/monitoring-aktivitas', [ActivityMonitoringController::class, 'index'])->name('activity.monitoring');
    Route::get('/pengelola-kebijakan', [PolicyManagementController::class, 'index'])->name('policy.management');
    Route::get('/monitoring-keuangan', [FinancialMonitoringController::class, 'index'])->name('financial.monitoring');
});

// ========================================
// Rute untuk Admin
// ========================================
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/dashboard/admin', [DashboardController::class, 'admin'])->name('dashboard.admin');
    Route::get('/admin/jobs', [JobModerationController::class, 'index'])->name('admin.jobs');
    Route::get('/admin/payments', [PaymentValidationController::class, 'index'])->name('admin.payments');
    Route::get('/admin/reports', [ReportHandlingController::class, 'index'])->name('admin.reports');
    Route::get('/admin/users', [UserVerificationController::class, 'index'])->name('admin.users');
    Route::get('admin/operations', [OperationsController::class, 'index'])->name('admin.operations');
});


Route::get('verifications/{id}', [UserVerificationController::class, 'show'])->name('verification.show');
Route::post('verifications/{id}/approve', [UserVerificationController::class, 'approve'])->name('verification.approve');
Route::post('verifications/{id}/reject', [UserVerificationController::class, 'reject'])->name('verification.reject');


// -------------------------------------------
// Penyedia Routes
// -------------------------------------------

Route::get('/pasang-pekerjaan', [JobController::class, 'index'])->name('pasang-pekerjaan');
Route::get('/list-pekerjaan', [JobController::class, 'showPekerjaan'])->name('list-pekerjaan');
Route::get('/list-lamaran', [JobController::class, 'showlamaran'])->name('list-lamaran');

Route::get('/dashboard/penyedia', [JobController::class, 'create'])->name('penyedia.create'); // Halaman form
Route::post('/dashboard/penyedia', [JobController::class, 'store'])->name('penyedia.store'); // Proses form

Route::get('list-lowongan', [UserVerificationController::class, 'index'])->name('list-lowongan.index');
Route::put('list-lowongan/{id}', [UserVerificationController::class, 'update'])->name('list-lowongan.update');
Route::get('list-lowongan', [UserVerificationController::class, 'index'])
    ->name('list-lowongan.index')
    ->middleware(['auth']);


// ========================================
// Rute dengan Middleware Web
// ========================================
Route::group(['middleware' => 'web'], function () {
    // Tambahkan rute tambahan di sini jika diperlukan
});
