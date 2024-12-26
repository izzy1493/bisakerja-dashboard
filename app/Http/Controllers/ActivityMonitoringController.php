<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\job;
use App\Models\Payment;

class ActivityMonitoringController extends Controller
{
    public function index()
    {
        $users = User::whereIn('role', ['penyedia', 'pencari'])->get();
        $userCount = $users->count();

        $jobs = Job::all(); // Mengambil semua data dari tabel jobs
        $jobCount = $jobs->count(); // Menghitung jumlah total data

        
        $payments = Payment::all(); // Mengambil semua data dari tabel jobs
        $paymentCount = $payments->count(); // Menghitung jumlah total data
    
        return view('dashboard.superadmin.activity-monitoring')->with([
            'users' => $users, // data
            'userCount'=> $userCount, // angka/jumlah
            'jobs' => $jobs, // data
            'jobCount'=> $jobCount, // angka/jumlah
            'payments' => $payments, // data
            'paymentCount'=> $paymentCount, // angka/jumlah


        ]);

    }
}
