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

// Rute untuk halaman login
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

// Rute untuk menangani proses login
Route::post('/login', [AuthController::class, 'login'])->name('loginSubmit');

// Rute untuk halaman Sign Up
Route::get('/signup', function () {
    return view('auth.signup');
})->name('signup');

// Rute untuk testing login
Route::get('logintest', function () {
    Auth::loginUsingId(2);
    return true;
});

// Rute untuk halaman awal
Route::get('/', [LandingController::class, 'index']); // Menu Loker
Route::get('/dashboard-page', [LandingController::class, 'page'])->name('dashboard-page');
Route::get('/penyedia-kerja', [LandingController::class, 'penyediaKerja']); // Menu Penyedia
Route::get('/pencari-kerja', [LandingController::class, 'pencariKerja']); // Menu Pencari
Route::get('/job/{id}', [LandingController::class, 'show'])->name('jobs.show');
Route::get('/dashboard-penyedia', [LandingController::class, 'penyedia'])->name('dashboard-penyedia');

// Rute umum untuk dashboard
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});

// Rute khusus untuk superadmin
Route::middleware(['auth', 'role:superadmin'])->group(function () {
    Route::get('/dashboard/superadmin', [DashboardController::class, 'superadmin'])->name('dashboard.superadmin');
    Route::get('/management-admin', [AdminManagementController::class, 'index'])->name('admin.management');
    Route::get('/management-admin/create', [AdminManagementController::class, 'create'])->name('admin.create');
    Route::post('/management-admin/store', [AdminManagementController::class, 'store'])->name('admin.store');

    Route::get('/monitoring-aktivitas', [ActivityMonitoringController::class, 'index'])->name('activity.monitoring');
    Route::get('/pengelola-kebijakan', [PolicyManagementController::class, 'index'])->name('policy.management');
    Route::get('/monitoring-keuangan', [FinancialMonitoringController::class, 'index'])->name('financial.monitoring');
});

// Rute khusus untuk admin
Route::prefix('admin')->middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'admin'])->name('dashboard.admin');
    Route::get('/jobs', [JobModerationController::class, 'index'])->name('admin.jobs');
    
    // Moderasi pekerjaan
    Route::get('/moderasi-pekerjaan', [JobModerationController::class, 'index'])->name('moderasi-pekerjaan');
    Route::get('/moderasi-pekerjaan/{id}', [JobModerationController::class, 'show'])->name('moderasi-pekerjaan.detail');
    Route::post('/moderasi-pekerjaan/{id}/approve', [JobModerationController::class, 'approve'])->name('moderasi-pekerjaan.approve');
    Route::post('/moderasi-pekerjaan/{id}/reject', [JobModerationController::class, 'reject'])->name('moderasi-pekerjaan.reject');

    // Validasi pembayaran
    Route::get('/payments', [PaymentValidationController::class, 'index'])->name('admin.payments');

    // Laporan
    Route::get('/reports', [ReportHandlingController::class, 'index'])->name('admin.reports');
    Route::post('/reports/{id}/resolve', [ReportHandlingController::class, 'resolve'])->name('admin.reports.resolve');
    Route::post('/reports/{id}/escalate', [ReportHandlingController::class, 'escalate'])->name('admin.reports.escalate');

    // Verifikasi pengguna
    Route::get('/users', [UserVerificationController::class, 'index'])->name('admin.users');
    Route::get('/users/{id}', [UserVerificationController::class, 'show'])->name('admin.users.detail');
    Route::post('/verify/approve/{id}', [UserVerificationController::class, 'approve'])->name('admin.verify.approve');
    Route::post('/verify/reject/{id}', [UserVerificationController::class, 'reject'])->name('admin.verify.reject');

    // Operasional data
    Route::get('/operations', [OperationsController::class, 'index'])->name('admin.operations');
    Route::get('/operations/{id}/edit', [OperationsController::class, 'edit'])->name('admin.operations.edit');
    Route::put('/operations/{id}', [OperationsController::class, 'update'])->name('admin.operations.update');
    Route::put('/operations/{job}/update-status', [OperationsController::class, 'updateStatus'])->name('admin.operations.updateStatus');
    Route::delete('/operations/{id}', [OperationsController::class, 'destroy'])->name('admin.operations.destroy');
    Route::post('/operations/users/{id}/activate', [OperationsController::class, 'activateUser'])->name('admin.operations.users.activate');
    Route::post('/operations/users/{id}/deactivate', [OperationsController::class, 'deactivateUser'])->name('admin.operations.users.deactivate');
});

// Rute untuk penyedia
Route::middleware(['auth', 'role:penyedia'])->group(function () {
    Route::get('/list-pekerjaan', [JobController::class, 'showPekerjaan'])->name('list-pekerjaan');
    Route::get('/list-lamaran', [JobController::class, 'showlamaran'])->name('list-lamaran');
});

// Rute untuk pencari kerja
Route::middleware(['auth', 'role:pencari'])->group(function () {
    Route::get('/dashboard/pencari', [PencariController::class, 'index'])->name('pencari.index');
    Route::get('/dashboard/pencari/{id}', [PencariController::class, 'show'])->name('pencari.show');
    Route::post('/dashboard/pencari/{id}/apply', [PencariController::class, 'apply'])->name('jobs.apply');
    Route::get('/profile', [PencariController::class, 'profile'])->name('pencari.profile');
});

// Logout
Route::post('logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/logout', function () {
    Auth::logout();
    return redirect('/');
});

// Rute tambahan dengan session middleware
Route::group(['middleware' => 'web'], function () {
    // Rute yang memerlukan session
});
