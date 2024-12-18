<?php

namespace Database\Seeders;

use App\Models\Job;
use Illuminate\Database\Seeder;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Menambahkan beberapa data pekerjaan untuk pengujian
        Job::create([
            'title' => 'Web Developer',
            'company' => 'Digital Agency',
            'location' => 'Bandung, Indonesia',
            'salary' => 8000000,
            'description' => 'Building websites and web applications for clients.',
        ]);

        Job::create([
            'title' => 'Project Manager',
            'company' => 'Tech Innovators',
            'location' => 'Jakarta, Indonesia',
            'salary' => 15000000,
            'description' => 'Managing software development projects from start to finish.',
        ]);

        Job::create([
            'title' => 'UX/UI Designer',
            'company' => 'Creative Studio',
            'location' => 'Surabaya, Indonesia',
            'salary' => 7000000,
            'description' => 'Designing user-friendly interfaces and experiences for web and mobile apps.',
        ]);
    }
}
