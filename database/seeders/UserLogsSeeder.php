<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class UserLogsSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        // Menambahkan beberapa log aktivitas pengguna
        foreach (range(1, 10) as $index) {
            DB::table('user_logs')->insert([
                'user_id' => $faker->numberBetween(1, 10), // Menggunakan ID pengguna yang ada
                'action' => $faker->sentence, // Deskripsi aktivitas
                'created_at' => now(),
            ]);
        }
    }
}
