<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class JobApplicationsSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        // Menambahkan beberapa aplikasi pekerjaan contoh
        foreach (range(1, 10) as $index) {
            DB::table('job_applications')->insert([
                'job_id' => $faker->numberBetween(1, 10), // Menggunakan ID pekerjaan yang ada
                'seeker_id' => $faker->numberBetween(1, 10), // Menggunakan ID pencari kerja yang ada
                'status' => $faker->randomElement(['Applied', 'Accepted', 'Rejected', 'Completed']),
                'applied_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
