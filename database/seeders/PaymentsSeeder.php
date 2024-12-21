<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class PaymentsSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        // Menambahkan beberapa pembayaran contoh
        foreach (range(1, 10) as $index) {
            DB::table('payments')->insert([
                'job_id' => $faker->numberBetween(1, 10), // Menggunakan ID pekerjaan yang ada
                'provider_id' => $faker->numberBetween(1, 10), // Menggunakan ID provider yang ada
                'amount' => $faker->randomFloat(2, 100, 1000), // Menghasilkan jumlah pembayaran acak
                'transfer_proof' => $faker->imageUrl(640, 480, 'business'),  // URL gambar acak untuk bukti transfer
                'status' => $faker->randomElement(['Pending', 'Validated', 'Rejected']),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
