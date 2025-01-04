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
use Illuminate\Support\Facades\Auth;

// Route untuk halaman login
Route::get('/login', function () {
    return view('auth.login'); // Pastikan sesuai dengan lokasi file
})->name('login');

// Rute untuk menangani proses login
Route::post('/login', [AuthController::class, 'login'])->name('loginSubmit');

// Route untuk halaman Sign Up
Route::get('/signup', function () {
    return view('auth.signup'); // Pastikan sesuai dengan lokasi file
})->name('signup');

// Route untuk logout
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

// Landing Awal
Route::get('/', [LandingController::class, 'index']); // Menu Loker
Route::get('/dashboard-page', [LandingController::class, 'page'])->name('dashboard-page');

Route::get('/penyedia-kerja', [LandingController::class, 'penyediaKerja']); // Menu Penyedia
Route::get('/pencari-kerja', [LandingController::class, 'pencariKerja']); // Menu Pencari

Route::get('/jobs', [JobController::class, 'index'])->name('jobs.index');
Route::get('/jobs/{id}', [JobController::class, 'show'])->name('jobs.show');

// Rute umum untuk dashboard
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});

// Rute khusus untuk superadmin
Route::middleware(['auth', 'role:superadmin'])->group(function () {
    Route::get('/management-admin', [AdminManagementController::class, 'index'])->name('admin.management');
    Route::get('/management-admin/create', [AdminManagementController::class, 'create'])->name('admin.create');
    Route::post('/management-admin/store', [AdminManagementController::class, 'store'])->name('admin.store');
    Route::get('/management-admin/{id}', [AdminManagementController::class, 'detail'])->name('admin.detail');
    Route::put('/admin/{id}/edit', [AdminManagementController::class, 'edit'])->name('admin.edit');
    Route::delete('/admin/{id}', [AdminManagementController::class, 'destroy'])->name('admin.delete');

    Route::get('/monitoring-aktivitas', [ActivityMonitoringController::class, 'index'])->name('activity.monitoring');
    Route::get('/pengelola-kebijakan', [PolicyManagementController::class, 'index'])->name('policy.management');
    Route::get('/monitoring-keuangan', [FinancialMonitoringController::class, 'index'])->name('financial.monitoring');
});

// Rute khusus untuk admin
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/dashboard/admin', [DashboardController::class, 'admin'])->name('dashboard.admin');
    Route::get('/admin/jobs', [JobModerationController::class, 'index'])->name('admin.jobs');
    Route::get('/admin/payments', [PaymentValidationController::class, 'index'])->name('admin.payments');
    Route::get('/admin/reports', [ReportHandlingController::class, 'index'])->name('admin.reports');
    Route::get('/admin/users', [UserVerificationController::class, 'index'])->name('admin.users');
    Route::get('admin/operations', [OperationsController::class, 'index'])->name('admin.operations');
});

// Penyedia
Route::middleware(['auth', 'role:penyedia'])->group(function () {
    Route::get('/list-pekerjaan', [JobController::class, 'showPekerjaan'])->name('list-pekerjaan');
    Route::get('/list-lamaran', [JobController::class, 'showlamaran'])->name('list-lamaran');
});

// Rute yang memerlukan session
Route::group(['middleware' => 'web'], function () {
    // Menyimpan admin baru
    Route::post('admin', [AdminManagementController::class, 'store'])->name('admin.store');
    Route::resource('admin', AdminManagementController::class);
});
