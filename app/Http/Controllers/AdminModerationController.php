<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminModerationController extends Controller
{
    // Langkah 1: Data dummy untuk daftar pekerjaan
    protected $jobs = [
        [
            'id' => 1,
            'title' => 'Front-End Developer',
            'description' => 'Membuat UI website menggunakan React.js',
            'location' => 'Remote',
            'duration' => '3 bulan',
            'status' => 'Pending', // Bisa Pending, Approved, Rejected
        ],
        [
            'id' => 2,
            'title' => 'Back-End Developer',
            'description' => 'Membuat API menggunakan Laravel',
            'location' => 'On-site, Jakarta',
            'duration' => '6 bulan',
            'status' => 'Pending',
        ],
    ];

    // Method untuk menampilkan daftar pekerjaan
    public function index()
    {
        return view('admin.moderation.index', ['jobs' => $this->jobs]);
    }

    // Method untuk menampilkan detail pekerjaan
    public function show($id)
    {
        $job = collect($this->jobs)->firstWhere('id', $id);
        return view('admin.moderation.show', ['job' => $job]);
    }

    public function approve($id)
    {
        return redirect()->route('admin.jobs.index')->with('success', 'Pekerjaan disetujui.');
    }

    public function reject(Request $request, $id)
    {
        $reason = $request->input('reason');
        return redirect()->route('admin.jobs.index')->with('error', 'Pekerjaan ditolak. Alasan: ' . $reason);
    }
}
