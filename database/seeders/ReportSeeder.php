<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Report;
use App\Models\User;
use App\Models\Job;

class ReportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Ambil user pertama sebagai pelapor
        $user = User::first();

        // Ambil pekerjaan pertama sebagai pekerjaan terkait
        $job = Job::first();

        // Tambahkan data dummy laporan
        Report::create([
            'user_id' => $user->id,
            'job_id' => $job->job_id,
            'description' => 'Deskripsi masalah pertama terkait pekerjaan.',
            'evidence' => 'uploads/evidence/file1.png', // Path bukti yang diunggah
            'status' => 'Pending',
        ]);

        Report::create([
            'user_id' => $user->id,
            'job_id' => $job->job_id,
            'description' => 'Deskripsi masalah kedua yang sudah diselesaikan.',
            'evidence' => 'uploads/evidence/file2.png',
            'status' => 'Resolved',
        ]);

        Report::create([
            'user_id' => $user->id,
            'job_id' => $job->job_id,
            'description' => 'Deskripsi masalah ketiga yang masih dalam eskalasi.',
            'evidence' => 'uploads/evidence/file3.png',
            'status' => 'Escalated',
        ]);
    }
}
