<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class EscrowsSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        // Menambahkan beberapa escrow contoh
        foreach (range(1, 10) as $index) {
            DB::table('escrows')->insert([
                'job_id' => $faker->numberBetween(1, 10),  // Menggunakan ID pekerjaan yang ada
                'seeker_id' => $faker->numberBetween(1, 10),  // Menggunakan ID pencari kerja yang ada
                'amount' => $faker->randomFloat(2, 100, 1000), // Jumlah dana escrow
                'status' => $faker->randomElement(['Held', 'Released', 'Refunded']),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
