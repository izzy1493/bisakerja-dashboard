<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    // Method untuk menampilkan daftar pekerjaan
    public function index()
    {
        // Mengambil semua data pekerjaan dari database
        $jobs = Job::all();  // Anda bisa menambahkan pagination jika daftar pekerjaan sangat banyak, misalnya: Job::paginate(10);

        // Mengirim data pekerjaan ke view
        return view('jobs.index', compact('jobs'));
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
