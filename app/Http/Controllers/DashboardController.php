<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function admin()
    {
        return view('dashboard.admin.dashboard');  // Halaman untuk Admin
    }
    public function superadmin()
    {
        return view('dashboard.superadmin.dashboard');  // Halaman untuk Admin
    }
    public function penyedia()
    {
        return view('dashboard.penyedia.index');  // Halaman untuk Admin
    }

    // Menampilkan daftar pekerjaan
    public function index()
    {
        // Mengambil semua pekerjaan dari database
        $jobs = Job::all();

        // Mengembalikan tampilan dengan data pekerjaan
        return view('jobs.index', compact('jobs'));
    }
    
    // Menampilkan detail pekerjaan berdasarkan ID
    public function show($id)
    {
        // Menampilkan pekerjaan berdasarkan ID
        $job = Job::findOrFail($id);

        // Mengembalikan tampilan detail pekerjaan
        return view('jobs.show', compact('job'));
    }
    
}
