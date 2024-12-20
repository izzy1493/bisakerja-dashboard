<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Job;

class JobSeeder extends Seeder
{
    public function run()
    {
        // Ambil provider pertama dari tabel users
        $provider = User::where('role', 'penyedia')->first();

        // Menambah data pekerjaan dengan status Pending
        Job::create([
            'provider_id' => $provider->user_id, // Pastikan menggunakan ID user yang ada
            'title' => 'Software Developer',
            'description' => 'We are looking for an experienced software developer to join our team.',
            'location' => 'Jakarta, Indonesia',
            'wage' => 5000000.00,
            'duration' => '6 months',
            'requirements' => 'Experience with PHP, Laravel, and JavaScript',
            'status' => 'Pending',
        ]);

        // Menambah data pekerjaan dengan status Active
        Job::create([
            'provider_id' => $provider->user_id,
            'title' => 'UI/UX Designer',
            'description' => 'Looking for a UI/UX designer to work on web and mobile app designs.',
            'location' => 'Bandung, Indonesia',
            'wage' => 4000000.00,
            'duration' => '12 months',
            'requirements' => 'Strong skills in Figma, Adobe XD, and user research',
            'status' => 'Active',
        ]);

        // Menambah data pekerjaan dengan status Completed
        Job::create([
            'provider_id' => $provider->user_id,
            'title' => 'Project Manager',
            'description' => 'We are looking for an experienced project manager to oversee multiple teams.',
            'location' => 'Surabaya, Indonesia',
            'wage' => 8000000.00,
            'duration' => 'Indefinite',
            'requirements' => '5+ years of experience in project management, strong leadership skills',
            'status' => 'Completed',
        ]);

        // Menambah data pekerjaan dengan status Cancelled
        Job::create([
            'provider_id' => $provider->user_id,
            'title' => 'Frontend Developer',
            'description' => 'We are looking for a skilled frontend developer to build modern web applications.',
            'location' => 'Yogyakarta, Indonesia',
            'wage' => 6000000.00,
            'duration' => 'Contract',
            'requirements' => 'Experience with React, Vue.js, and HTML/CSS',
            'status' => 'Cancelled',
        ]);
    }
}
