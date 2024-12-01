<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminModerationController;
use App\Http\Controllers\Admin\VerificationController;

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/verifications', [VerificationController::class, 'index'])->name('verifications.index');
    Route::get('/verifications/{id}', [VerificationController::class, 'show'])->name('verifications.show');
    Route::post('/verifications/{id}/approve', [VerificationController::class, 'approve'])->name('verifications.approve');
    Route::post('/verifications/{id}/reject', [VerificationController::class, 'reject'])->name('verifications.reject');
});


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
    Route::get('/jobs', [AdminModerationController::class, 'index'])->name('jobs.index');
    Route::get('/jobs/{id}', [AdminModerationController::class, 'show'])->name('jobs.show');
    Route::post('/jobs/{id}/approve', [AdminModerationController::class, 'approve'])->name('jobs.approve');
    Route::post('/jobs/{id}/reject', [AdminModerationController::class, 'reject'])->name('jobs.reject');
});

