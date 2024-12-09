<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class JobModerationController extends Controller
{
    // // Menampilkan daftar pekerjaan
    public function index()
    {
        $jobs = Job::where('status', 'pending')->get(); // Ambil hanya pekerjaan dengan status 'pending'
        return view('admin.jobs.index', compact('jobs'));
    }

    // Menampilkan detail pekerjaan
    public function show($id)
    {
        $job = Job::findOrFail($id);
        return view('admin.jobs.show', compact('job'));
    }

    // Menyetujui pekerjaan
    public function approve($id)
    {
        $job = Job::findOrFail($id);
        $job->update(['status' => 'approved']); // Ubah status menjadi 'approved'
        return redirect()->route('admin.jobs.index')->with('success', 'Pekerjaan berhasil disetujui.');
    }

    // Menolak pekerjaan
    public function reject(Request $request, $id)
    {
        $job = Job::findOrFail($id);
        $job->update([
            'status' => 'rejected',
            'rejection_reason' => $request->input('reason'), // Simpan alasan penolakan
        ]);
        return redirect()->route('admin.jobs.index')->with('success', 'Pekerjaan berhasil ditolak.');
    }
}
