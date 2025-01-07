<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\JobApplication;
use Illuminate\Http\Request;

class PencariController extends Controller
{
    // Menambahkan middleware autentikasi
    public function __construct()
    {
        $this->middleware('auth'); // Memastikan hanya pengguna yang sudah login yang bisa melamar
    }

    // Menampilkan daftar pekerjaan
    public function index()
    {
        $jobs = Job::paginate(10); // Pagination 10 item per halaman
        return view('dashboard.pencari.index', compact('jobs'));
    }

    // Menampilkan detail pekerjaan
    public function show($id)
    {
        $job = Job::findOrFail($id);
        return view('dashboard.pencari.show', compact('job'));
    }

    // Melamar pekerjaan
    public function apply(Request $request, $id)
    {
        // Pastikan pengguna sudah login
        if (!auth()->check()) {
            return redirect()->route('login')->with('error', 'Anda harus login terlebih dahulu.');
        }

        // Cek apakah pengguna memiliki role 'pencari'
        if (auth()->user()->role !== 'pencari') {
            return redirect()->route('home')->with('error', 'Hanya pengguna dengan role "pencari" yang bisa melamar.');
        }

        // Cari pekerjaan berdasarkan ID
        $job = Job::findOrFail($id);

        // Validasi job_id
        $request->validate([
            'job_id' => 'required|exists:jobs,id',
        ]);

        // Cek apakah user sudah melamar pekerjaan ini
        if (JobApplication::where('job_id', $id)->where('seeker_id', auth()->id())->exists()) {
            return redirect()->back()->with('error', 'Anda sudah melamar pekerjaan ini.');
        }

        // Buat lamaran pekerjaan baru
        JobApplication::create([
            'job_id' => $job->job_id,
            'seeker_id' => auth()->id(), // ID pengguna yang sedang login
            'status' => 'Applied', // Status lamaran
            'applied_at' => now(),
        ]);

        // Kembali ke halaman detail pekerjaan dengan pesan sukses
        return redirect()->route('pencari.show', $id)->with('success', 'Lamaran Anda berhasil dikirim.');
    }
}
