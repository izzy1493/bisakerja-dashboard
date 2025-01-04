<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\JobApplication;
use Illuminate\Http\Request;

class PencariController extends Controller
{
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
        $job = Job::findOrFail($id);

        if (JobApplication::where('job_id', $id)->where('seeker_id', auth()->id())->exists()) {
            return redirect()->back()->with('error', 'Anda sudah melamar pekerjaan ini.');
        }

        JobApplication::create([
            'job_id' => $job->id,
            'seeker_id' => auth()->id(),
            'status' => 'pending',
            'applied_at' => now(),
        ]);

        return redirect()->route('pencari.show', $id)->with('success', 'Lamaran Anda berhasil dikirim.');
    }
}
