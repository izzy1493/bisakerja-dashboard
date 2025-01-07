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
    // Cari pekerjaan berdasarkan ID
    $job = Job::findOrFail($id);

    // Gunakan data dummy, abaikan request untuk validasi
    $dataLamaran = [
        'job_id' => $job->job_id, // Ambil job_id dari $job
        'seeker_id' => auth()->id(), // ID pengguna yang sedang login
        'status' => 'Applied', // Status lamaran
        'applied_at' => now(),
    ];

    // Debug: Periksa data dummy sebelum digunakan
    // dd($dataLamaran);

    // Cek apakah user sudah melamar pekerjaan ini
    if (JobApplication::where('job_id', $dataLamaran['job_id'])
        ->where('seeker_id', $dataLamaran['seeker_id'])
        ->exists()) {
        return redirect()->back()->with('error', 'Anda sudah melamar pekerjaan ini.');
    }

    // Buat lamaran pekerjaan baru menggunakan data dummy
    $application = JobApplication::create($dataLamaran);

    // Debug: Periksa hasil dari pembuatan data dummy
    if (!$application) {
        return redirect()->back()->with('error', 'Gagal membuat lamaran pekerjaan.');
    }

    // Kembali ke halaman detail pekerjaan dengan pesan sukses
    return redirect()->route('pencari.show', $id)->with('success', 'Lamaran Anda berhasil dikirim.');
}

}
