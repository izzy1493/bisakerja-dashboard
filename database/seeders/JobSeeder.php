<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jobs')->insert([
            [
                'title' => 'Software Engineer',
                'company' => 'PT. Teknologi Canggih',
                'location' => 'Jakarta, Indonesia',
                'salary' => 15000000.00,
                'qualification' => 'Minimum 3.50 GPA or equivalent. Proficient in programming languages such as Java, Python, or C++.',
                'description' => 'Develop and maintain software applications.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Graphic Designer',
                'company' => 'PT. Desain Kreatif',
                'location' => 'Bandung, Indonesia',
                'salary' => 8000000.00,
                'qualification' => 'Proficient in design tools like Adobe Photoshop, Illustrator, and InDesign. Strong creativity and communication skills.',
                'description' => 'Create visual concepts to communicate ideas.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Marketing Manager',
                'company' => 'PT. Pemasaran Global',
                'location' => 'Surabaya, Indonesia',
                'salary' => 20000000.00,
                'qualification' => 'Proven experience in marketing strategies, leadership skills, and a degree in marketing or related fields.',
                'description' => 'Lead and execute marketing strategies.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
