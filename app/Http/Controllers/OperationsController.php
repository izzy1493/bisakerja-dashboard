<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\User;
use Illuminate\Http\Request;

class OperationsController extends Controller
{
    public function index()
    {
        // Role check tetap bisa dilakukan jika perlu
        $role = 'admin'; // Tentukan role yang sesuai
    
        if ($role == 'admin') {
            // Ambil data pekerjaan beserta aplikasi dan pelamar
            $jobs = Job::with('applications.seeker')->get();
    
            // Ambil data pengguna (hanya yang memiliki role 'pencari' dan 'penyedia')
            $users = User::whereIn('role', ['pencari', 'penyedia'])->get();
    
            // Kirim data ke view
            return view('dashboard.admin.operation.operations', compact('jobs', 'users'));
        }
    
        // Jika role tidak valid
        return abort(403, 'Unauthorized action.');
    }
    
}
