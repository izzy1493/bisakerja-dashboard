<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\JobModerationController;
use App\Http\Controllers\Admin\VerificationController;
use App\Http\Controllers\Admin\ReportController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Admin\AdminModerationController;


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
    Route::get('/jobs', [JobModerationController::class, 'index'])->name('jobs.index');
    Route::get('/jobs/{id}', [JobModerationController::class, 'show'])->name('jobs.show');
    Route::post('/jobs/{id}/approve', [JobModerationController::class, 'approve'])->name('jobs.approve');
    Route::post('/jobs/{id}/reject', [JobModerationController::class, 'reject'])->name('jobs.reject');

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