<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;

// Daftar pekerjaan
Route::get('/jobs', [JobController::class, 'index'])->name('jobs.index');

// Halaman detail pekerjaan berdasarkan ID
Route::get('/jobs/{id}', [JobController::class, 'show'])->name('jobs.show');

