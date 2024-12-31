<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\JobApplication;
use Illuminate\Http\Request;

class JobController extends Controller
{
    // Method untuk menampilkan daftar pekerjaan dengan pagination
    public function index()
    {
        // Mengambil data pekerjaan dengan pagination (10 per halaman)
        $jobs = Job::paginate(10);

        // Mengirim data pekerjaan ke view
        return view('dashboard.penyedia.index', compact('jobs'));
    }

    // Method untuk menampilkan detail pekerjaan
    public function show($id)
    {
        // Mencari pekerjaan berdasarkan ID
        $job = Job::findOrFail($id);

        // Mengirim data pekerjaan ke view
        return view('jobs.show', compact('job'));
    }

    // Method untuk menampilkan semua lamaran pekerjaan
    public function showlamaran()
    {
        // Mengambil data lamaran pekerjaan
        $jobApplications = JobApplication::all();

        // Mengirim data lamaran pekerjaan ke view
        return view('dashboard.penyedia.lamaran.index', compact('jobApplications'));
    }
}
