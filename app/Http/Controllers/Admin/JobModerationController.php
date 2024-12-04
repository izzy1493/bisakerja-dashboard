<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class JobModerationController extends Controller
{
    // Daftar pekerjaan yang diposting (data dummy)
    protected $jobs = [
        [
            'id' => 1,
            'title' => 'Software Engineer',
            'description' => 'Looking for a Software Engineer with 5+ years experience.',
            'location' => 'Jakarta',
            'duration' => 'Full-time',
            'status' => 'Pending',
        ],
        [
            'id' => 2,
            'title' => 'Product Manager',
            'description' => 'Seeking a Product Manager for a tech company.',
            'location' => 'Bandung',
            'duration' => 'Contract',
            'status' => 'Pending',
        ],
        // Tambahkan pekerjaan lainnya sesuai kebutuhan
    ];

    // Menampilkan daftar pekerjaan yang diposting
    public function index()
    {
        return view('admin.jobs.index', ['jobs' => $this->jobs]);
    }

    // Menampilkan detail pekerjaan berdasarkan ID
    public function show($id)
    {
        // Mencari pekerjaan berdasarkan ID
        $job = collect($this->jobs)->firstWhere('id', $id);
        
        // Jika pekerjaan tidak ditemukan, tampilkan halaman 404
        if (!$job) {
            abort(404, 'Job not found');
        }

        return view('admin.jobs.show', ['job' => $job]);
    }

    // Menyetujui pekerjaan
    public function approve($id)
    {
        // Mencari pekerjaan berdasarkan ID
        $job = collect($this->jobs)->firstWhere('id', $id);
        
        // Jika pekerjaan ditemukan, ubah status menjadi 'Approved'
        if ($job) {
            $job['status'] = 'Approved';
        }

        // Setelah disetujui, kembali ke daftar pekerjaan
        return redirect()->route('admin.jobs.index')->with('success', 'Pekerjaan telah disetujui.');
    }

    // Menolak pekerjaan dengan alasan
    public function reject(Request $request, $id)
    {
        // Mencari pekerjaan berdasarkan ID
        $job = collect($this->jobs)->firstWhere('id', $id);
        
        // Jika pekerjaan ditemukan, ubah status menjadi 'Rejected'
        if ($job) {
            $job['status'] = 'Rejected';
        }

        // Mendapatkan alasan penolakan dari form
        $reason = $request->input('reason');

        // Redirect kembali ke daftar pekerjaan dengan alasan penolakan
        return redirect()->route('admin.jobs.index')->with('error', 'Pekerjaan ditolak. Alasan: ' . $reason);
    }
}
