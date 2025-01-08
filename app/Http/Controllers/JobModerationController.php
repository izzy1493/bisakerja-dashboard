<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job; // Pastikan model Job di-import

class JobModerationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth'); // Pastikan pengguna login sebelum mengakses
    }

    // Halaman moderasi pekerjaan (daftar pekerjaan)
    public function index()
    {
        // Ambil semua data pekerjaan
        $jobs = Job::all();

        // Kirim data ke view
        return view('dashboard.admin.job.job-moderation', compact('jobs'));
    }

    // Halaman detail pekerjaan
    public function show($id)
    {
        // Ambil pekerjaan berdasarkan ID
        $job = Job::findOrFail($id);

        // Kirim data ke view
        return view('dashboard.admin.job.detail', compact('job'));
    }
}
