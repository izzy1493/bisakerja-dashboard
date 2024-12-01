<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminManagementController;
use App\Http\Controllers\ActivityMonitoringController;
use App\Http\Controllers\PolicyManagementController;
use App\Http\Controllers\FinancialMonitoringController;

Route::get('/beranda', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/management-admin', [AdminManagementController::class, 'index'])->name('admin.management');
Route::get('/monitoring-aktivitas', [ActivityMonitoringController::class, 'index'])->name('activity.monitoring');
Route::get('/pengelola-kebijakan', [PolicyManagementController::class, 'index'])->name('policy.management');
Route::get('/monitoring-keuangan', [FinancialMonitoringController::class, 'index'])->name('financial.monitoring');
