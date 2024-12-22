<?php

// namespace App\Http\Controllers;

// use Illuminate\Http\Request;

// class JobController extends Controller
// {
//     // Menampilkan form pasang pekerjaan
//     public function create()
//     {
//         return view('dashboard.penyedia.index'); // File Blade form Anda
//     }

//     // Memproses data form
//     public function store(Request $request)
//     {
//         // Validasi data
//         $validatedData = $request->validate([
//             'judul' => 'required|string|max:255',
//             'deskripsi' => 'required|string',
//             'kategori' => 'required|string',
//             'tenggat_waktu' => 'required|date',
//         ]);

//         // Simpan data ke database
//         // Contoh: Job::create($validatedData);

//         return redirect()->route('penyedia.create')->with('success', 'Pekerjaan berhasil dipasang!');
//     }
// }



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
        $jobApplications = JobApplication::all();  // Anda bisa menambahkan pagination jika daftar pekerjaan sangat banyak, misalnya: Job::paginate(10);

        // Mengirim data pekerjaan ke view
        return view('dashboard.penyedia.lamaran.index',compact('jobApplications'));

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
