<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\JobApplication;
use Illuminate\Http\Request;

class JobController extends Controller
{
    // Method untuk menampilkan daftar pekerjaan
    public function index()
    {
        // Mengambil semua data pekerjaan dari database
        $jobs = Job::all();  // Anda bisa menambahkan pagination jika daftar pekerjaan sangat banyak, misalnya: Job::paginate(10);

        // Mengirim data pekerjaan ke view
        return view('dashboard.penyedia.index', compact('jobs'));
    }

    public function showPekerjaan()
    {
        // Mengambil semua data pekerjaan dari database
        $jobs = Job::all();  // Anda bisa menambahkan pagination jika daftar pekerjaan sangat banyak, misalnya: Job::paginate(10);

        // Mengirim data pekerjaan ke view
        return view('dashboard.penyedia.listPekerjaan.index', compact('jobs'));
    }

    public function showlamaran()
    {
        // Mengambil semua data pekerjaan dari database
        $jobApplications = JobApplication::with('seeker', 'job')->get();  // Anda bisa menambahkan pagination jika daftar pekerjaan sangat banyak, misalnya: Job::paginate(10);

        // Mengirim data pekerjaan ke view
        return view('dashboard.penyedia.lamaran.index', compact('jobApplications'));
    }

    // Method untuk menampilkan detail pekerjaan
    public function show($id)
    {
        // Mencari pekerjaan berdasarkan ID
        $job = Job::findOrFail($id);

        // Mengirim data pekerjaan ke view
        return view('jobs.show', compact('job'));
    }
}
