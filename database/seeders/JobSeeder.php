<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JobSeeder extends Seeder
{
    public function run()
    {
        DB::table('jobs')->insert([
            [
                'provider_id' => 1,
                'title' => 'Content Writer',
                'description' => 'Create high-quality, engaging, and informative content for various platforms.',
                'location' => 'Remote',
                'wage' => 3500000,
                'duration' => '3 months',
                'requirements' => 'Excellent writing and communication skills, SEO knowledge',
                'status' => 'Active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'provider_id' => 2,
                'title' => 'Business Analyst',
                'description' => 'Analyze business processes, identify areas for improvement, and recommend solutions.',
                'location' => 'Surabaya, Indonesia',
                'wage' => 5500000,
                'duration' => '12 months',
                'requirements' => 'Strong analytical and problem-solving skills, experience with data analysis tools',
                'status' => 'Active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'provider_id' => 3,
                'title' => 'Backend Engineer',
                'description' => 'Develop and maintain robust and scalable backend systems.',
                'location' => 'Bali, Indonesia',
                'wage' => 6000000,
                'duration' => '6 months',
                'requirements' => 'Experience with Node.js, Python (Django/Flask), and databases (MySQL, PostgreSQL)',
                'status' => 'Active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'provider_id' => 1,
                'title' => 'Digital Marketing Specialist',
                'description' => 'Develop and execute marketing strategies to increase brand awareness.',
                'location' => 'Semarang, Indonesia',
                'wage' => 4200000,
                'duration' => '12 months',
                'requirements' => 'Experience in SEO, social media marketing, and Google Ads',
                'status' => 'Active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'provider_id' => 2,
                'title' => 'Project Manager',
                'description' => 'Manage multiple projects, ensure deadlines are met, and lead a team effectively.',
                'location' => 'Medan, Indonesia',
                'wage' => 5000000,
                'duration' => '10 months',
                'requirements' => 'Strong leadership and organizational skills',
                'status' => 'Active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
