<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Memanggil seeder untuk tabel `users`
        $this->call(UserSeeder::class);

        $this->call(UserVerificationSeeder::class);

        // Memanggil seeder untuk tabel `jobs`
        $this->call(JobSeeder::class);

        // Memanggil seeder untuk tabel `payments`
        $this->call(PaymentsSeeder::class);

        // Memanggil seeder untuk tabel `job_applications`
        $this->call(JobApplicationsSeeder::class);

        // Memanggil seeder untuk tabel `escrows`
        $this->call(EscrowsSeeder::class);

        // Memanggil seeder untuk tabel `user_logs`

        // Memanggil seeder untuk tabel `report`
        $this->call(ReportSeeder::class);
    }
}
