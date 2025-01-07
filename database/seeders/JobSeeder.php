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
                'title' => 'Software Developer',
                'description' => 'We are looking for an experienced software developer to join our team.',
                'location' => 'Jakarta, Indonesia',
                'wage' => 5000000,
                'duration' => '6 months',
                'requirements' => 'Experience with PHP, Laravel, and JavaScript',
                'status' => 'Active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'provider_id' => 2,
                'title' => 'Data Analyst',
                'description' => 'Analyze and interpret complex datasets to provide actionable insights.',
                'location' => 'Bandung, Indonesia',
                'wage' => 4500000,
                'duration' => '3 months',
                'requirements' => 'Proficient in Python, SQL, and data visualization tools',
                'status' => 'Active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'provider_id' => 3,
                'title' => 'UI/UX Designer',
                'description' => 'Design intuitive user interfaces and enhance user experience for web applications.',
                'location' => 'Surabaya, Indonesia',
                'wage' => 4000000,
                'duration' => '4 months',
                'requirements' => 'Knowledge of Figma, Adobe XD, and usability testing',
                'status' => 'Active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'provider_id' => 1,
                'title' => 'Digital Marketing Specialist',
                'description' => 'Develop and execute marketing strategies to increase brand awareness.',
                'location' => 'Yogyakarta, Indonesia',
                'wage' => 4200000,
                'duration' => '5 months',
                'requirements' => 'Experience in SEO, social media marketing, and Google Ads',
                'status' => 'Active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'provider_id' => 2,
                'title' => 'Project Manager',
                'description' => 'Manage multiple projects, ensure deadlines are met, and lead a team effectively.',
                'location' => 'Jakarta, Indonesia',
                'wage' => 7000000,
                'duration' => '8 months',
                'requirements' => 'Strong leadership and organizational skills',
                'status' => 'Active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
