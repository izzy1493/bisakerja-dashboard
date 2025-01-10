<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\JobApplication;
use Illuminate\Http\Request;

class PencariController extends Controller
{
    // Middleware autentikasi
    public function __construct()
    {
        $this->middleware('auth'); // Memastikan hanya pengguna yang sudah login yang bisa mengakses
    }

    // Menampilkan daftar pekerjaan
    public function index(Request $request)
    {
        // Query awal untuk daftar pekerjaan
        $query = Job::query();
    
        // Filter pencarian berdasarkan input
        if ($request->filled('q')) {
            $query->where('title', 'like', '%' . $request->q . '%');
        }
    
        // Ambil data pekerjaan dengan pagination
        $jobs = $query->latest()->paginate(10);
    
        return view('dashboard.pencari.index', compact('jobs'));
    }
    
    

    // Menampilkan detail pekerjaan
    public function show($id)
    {
        $job = Job::findOrFail($id);

        // Ubah kolom requirements (text) menjadi array berdasarkan pemisah
        // Sesuaikan pemisah: "\n" untuk garis baru atau "," untuk koma
        $job->requirements = $job->requirements ? explode("\n", $job->requirements) : [];

        // Cek apakah user sudah melamar pekerjaan ini
        $hasApplied = JobApplication::where('job_id', $job->job_id)
            ->where('seeker_id', auth()->id())
            ->exists();

        return view('dashboard.pencari.show', compact('job', 'hasApplied'));
    }

    // Melamar pekerjaan
    public function apply(Request $request, $id)
    {
        // Cari pekerjaan berdasarkan ID
        $job = Job::findOrFail($id);

        $dataLamaran = [
            'job_id' => $job->job_id,
            'seeker_id' => auth()->id(),
            'status' => 'Applied',
            'applied_at' => now(),
        ];

        // Cek apakah user sudah melamar pekerjaan ini
        if (JobApplication::where('job_id', $dataLamaran['job_id'])
            ->where('seeker_id', $dataLamaran['seeker_id'])
            ->exists()) {
            return redirect()->back()->with('error', 'Anda sudah melamar pekerjaan ini.');
        }

        // Buat lamaran pekerjaan baru
        JobApplication::create($dataLamaran);

        return redirect()->route('pencari.show', $id)->with('success', 'Lamaran Anda berhasil dikirim.');
    }

    // Menampilkan profil pengguna
    public function profile()
    {
        $user = auth()->user(); // Mendapatkan data pengguna yang sedang login
        return view('dashboard.pencari.profile', compact('user'));
    }
}
