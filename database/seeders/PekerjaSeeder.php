<?php

// database/seeders/PekerjaSeeder.php
namespace Database\Seeders;

use App\Models\Pekerja;
use Illuminate\Database\Seeder;

class PekerjaSeeder extends Seeder
{
    public function run()
    {
        Pekerja::create([
            'nama' => 'Andi Wijaya',
            'email' => 'andi@example.com',
            'telepon' => '081234567890',
            'bio' => 'Desainer grafis berpengalaman lebih dari 5 tahun.',
        ]);

        Pekerja::create([
            'nama' => 'Budi Santoso',
            'email' => 'budi@example.com',
            'telepon' => '089876543210',
            'bio' => 'Web developer dengan keahlian di Laravel dan React.',
        ]);
    }
}
