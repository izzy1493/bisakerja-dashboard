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

        Job::create([
            'provider_id' => $provider->user_id, // Pastikan menggunakan ID user yang ada
            'title' => 'Software Developer',
            'description' => 'We are looking for an experienced software developer to join our team.',
            'location' => 'Jakarta, Indonesia',
            'wage' => 5000000.00,
            'duration' => '6 months',
            'requirements' => 'Experience with PHP, Laravel, and JavaScript',
            'status' => 'Active', // Status ditetapkan secara manual
        ]);

        Job::create([
            'provider_id' => $provider->id,
            'title' => 'UI/UX Designer',
            'description' => 'Seeking a creative UI/UX designer to enhance user experience.',
            'location' => 'Bandung, Indonesia',
            'wage' => 6000000.00,
            'duration' => '3 months',
            'requirements' => 'Proficient in Figma and Adobe XD',
            'status' => 'Pending', // Status ditetapkan secara manual
        ]);

        Job::create([
            'provider_id' => $provider->user_id,
            'title' => 'Data Analyst',
            'description' => 'Looking for a data analyst to interpret data and provide insights.',
            'location' => 'Surabaya, Indonesia',
            'wage' => 7000000.00,
            'duration' => '12 months',
            'requirements' => 'Experience with SQL and data visualization tools',
            'status' => 'Cancelled', // Status ditetapkan secara manual
        ]);

        Job::create([
            'provider_id' => $provider->id,
            'title' => 'Project Manager',
            'description' => 'We need a project manager to oversee projects and ensure timely delivery.',
            'location' => 'Yogyakarta, Indonesia',
            'wage' => 8000000.00,
            'duration' => '12 months',
            'requirements' => 'Proven experience in project management',
            'status' => 'Active', // Status ditetapkan secara manual
        ]);

        Job::create([
            'provider_id' => $provider->user_id,
            'title' => 'Marketing Specialist',
            'description' => 'Join our marketing team to develop and implement marketing strategies.',
            'location' => 'Medan, Indonesia',
            'wage' => 5500000.00,
            'duration' => '6 months',
            'requirements' => 'Experience in digital marketing and SEO',
            'status' => 'Pending', // Status ditetapkan secara manual
        ]);

        Job::create([
            'provider_id' => $provider->user_id,
            'title' => 'System Administrator',
            'description' => 'We are looking for a system administrator to manage our IT infrastructure.',
            'location' => 'Bali, Indonesia',
            'wage' => 7500000.00,
            'duration' => '12 months',
            'requirements' => 'Experience with Linux and network management',
            'status' => 'Active', // Status ditetapkan secara manual
        ]);

        Job::create([
            'provider_id' => $provider->user_id,
            'title' => 'Content Writer',
            'description' => 'Seeking a talented content writer to create engaging content.',
            'location' => 'Jakarta, Indonesia',
            'wage' => 4000000.00,
            'duration' => '3 months',
            'requirements' => 'Excellent writing skills and creativity',
            'status' => 'Cancelled', // Status ditetapkan secara manual
        ]);

        Job::create([
            'provider_id' => $provider->user_id,
            'title' => 'Graphic Designer',
            'description' => 'Looking for a graphic designer to create visual content for our brand.',
            'location' => 'Semarang, Indonesia',
            'wage' => 5000000.00,
            'duration' => '6 months',
            'requirements' => 'Proficient in Adobe Photoshop and Illustrator',
            'status' => 'Pending', // Status ditetapkan secara manual
        ]);

        // Tambahan 4 lowongan kerja
        Job ::create([
            'provider_id' => $provider->user_id,
            'title' => 'SEO Specialist',
            'description' => 'We are looking for an SEO specialist to improve our search engine rankings.',
            'location' => 'Jakarta, Indonesia',
            'wage' => 6500000.00,
            'duration' => '6 months',
            'requirements' => 'Experience with SEO tools and strategies',
            'status' => 'Active', // Status ditetapkan secara manual
        ]);

        Job::create([
            'provider_id' => $provider->user_id,
            'title' => 'Mobile App Developer',
            'description' => 'Join our team as a mobile app developer to create innovative applications.',
            'location' => 'Bali, Indonesia',
            'wage' => 7000000.00,
            'duration' => '12 months',
            'requirements' => 'Experience with iOS and Android development',
            'status' => 'Pending', // Status ditetapkan secara manual
        ]);

        Job::create([
            'provider_id' => $provider->user_id,
            'title' => 'Network Engineer',
            'description' => 'We need a network engineer to manage and optimize our network infrastructure.',
            'location' => 'Surabaya, Indonesia',
            'wage' => 8000000.00,
            'duration' => '12 months',
            'requirements' => 'Experience with network protocols and security',
            'status' => 'Cancelled', // Status ditetapkan secara manual
        ]);

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
