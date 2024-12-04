<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    // Data dummy laporan
    protected $reports = [
        [
            'id' => 1,
            'reporter_name' => 'John Doe',
            'job_title' => 'Web Developer',
            'description' => 'Masalah dalam komunikasi antara penyedia kerja dan pencari kerja.',
            'evidence' => '/images/report1.jpg',
            'status' => 'Pending',
        ],
        [
            'id' => 2,
            'reporter_name' => 'Jane Smith',
            'job_title' => 'Graphic Designer',
            'description' => 'Masalah mengenai pembayaran pekerjaan.',
            'evidence' => '/images/report2.jpg',
            'status' => 'Pending',
        ],
    ];

    // Method untuk menampilkan daftar laporan
    public function index()
    {
        return view('admin.reports.index', ['reports' => $this->reports]);
    }

    // Method untuk melihat detail laporan
    public function show($id)
    {
        $report = collect($this->reports)->firstWhere('id', $id);
        return view('admin.reports.show', ['report' => $report]);
    }

    // Method untuk menandai laporan sebagai resolved
    public function resolve($id)
    {
        return redirect()->route('admin.reports.index')->with('success', 'Laporan telah diselesaikan.');
    }

    // Method untuk mengeskalasi laporan ke superadmin
    public function escalate($id)
    {
        return redirect()->route('admin.reports.index')->with('error', 'Laporan telah di eskalasi ke Superadmin.');
    }
}
