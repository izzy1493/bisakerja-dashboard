<?php

// database/seeders/PekerjaanSeeder.php
namespace Database\Seeders;

use App\Models\Pekerjaan;
use Illuminate\Database\Seeder;

class PekerjaanSeeder extends Seeder
{
    public function run()
    {
        Pekerjaan::create([
            'judul' => 'Desain Website Perusahaan',
            'deskripsi' => 'Membuat desain website responsif untuk perusahaan.',
            'kategori' => 'Desain',
            'tenggat_waktu' => '2024-12-31',
        ]);

        Pekerjaan::create([
            'judul' => 'Pengembangan Sistem Informasi',
            'deskripsi' => 'Membangun sistem informasi berbasis web dengan Laravel.',
            'kategori' => 'Teknologi',
            'tenggat_waktu' => '2024-11-30',
        ]);
    }
}
