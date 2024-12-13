<?php
namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        // Redirect based on the user's role
        if ($user->role == 'superadmin') {
            return view('dashboard.superadmin.dashboard');
        } elseif ($user->role == 'admin') {
            return view('dashboard.admin.dashboard');
        }

        // Default redirect for other roles (e.g. regular user)
        return redirect()->route('user.dashboard');
    }


    // Menampilkan daftar pekerjaan
    public function lowonganPekerjaan()
    {
        // Mengambil semua pekerjaan dari database
        $jobs = Job::all();

        // Mengembalikan tampilan dengan data pekerjaan
        return view('jobs.index', compact('jobs'));
    }
    
    // Menampilkan detail pekerjaan berdasarkan ID
    public function show($id)
    {
        // Menampilkan pekerjaan berdasarkan ID
        $job = Job::findOrFail($id);

        // Mengembalikan tampilan detail pekerjaan
        return view('jobs.show', compact('job'));
    }

}