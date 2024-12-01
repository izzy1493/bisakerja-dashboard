<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminModerationController extends Controller
{
    // Menampilkan daftar pekerjaan
    public function index()
    {
        $jobs = [
            ['id' => 1, 'title' => 'Web Developer', 'status' => 'pending'],
            ['id' => 2, 'title' => 'Graphic Designer', 'status' => 'approved'],
            ['id' => 3, 'title' => 'Content Writer', 'status' => 'pending'],
        ];

        return view('admin.jobs.index', compact('jobs'));
    }

    // Menampilkan detail pekerjaan
    public function show($id)
    {
        $job = [
            'id' => $id,
            'title' => 'Web Developer',
            'description' => 'Membutuhkan Web Developer berpengalaman untuk proyek 3 bulan.',
            'location' => 'Jakarta',
            'duration' => '3 bulan',
            'status' => 'pending',
        ];

        return view('admin.jobs.show', compact('job'));
    }

    // Menyetujui pekerjaan
    public function approve($id)
    {
        // Logika menyetujui pekerjaan
        return redirect()->route('admin.jobs.index')->with('success', 'Pekerjaan disetujui.');
    }

    // Menolak pekerjaan
    public function reject(Request $request, $id)
    {
        $reason = $request->input('reason');

        // Logika menolak pekerjaan
        return redirect()->route('admin.jobs.index')->with('error', 'Pekerjaan ditolak dengan alasan: ' . $reason);
    }
}
