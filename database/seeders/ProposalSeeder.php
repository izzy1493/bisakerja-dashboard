<?php

// database/seeders/ProposalSeeder.php
namespace Database\Seeders;

use App\Models\JobProposal;
use App\Models\Pekerjaan;
use App\Models\Pekerja;
use Illuminate\Database\Seeder;

class ProposalSeeder extends Seeder
{
    public function run()
    {
        // Ambil data pekerjaan dan pekerja yang sudah ada
        $pekerjaan = Pekerjaan::first(); // Ambil pekerjaan pertama
        $pekerja = Pekerja::first(); // Ambil pekerja pertama

        // Buat beberapa proposal
        JobProposal::create([
            'pekerjaan_id' => $pekerjaan->id,
            'pekerja_id' => $pekerja->id,
            'deskripsi' => 'Saya akan membuat desain website yang menarik dan responsif.',
            'harga' => 1000000.00,
        ]);

       JobProposal::create([
            'pekerjaan_id' => $pekerjaan->id,
            'pekerja_id' => $pekerja->id,
            'deskripsi' => 'Membangun sistem informasi sesuai dengan kebutuhan bisnis.',
            'harga' => 1500000.00,
        ]);
    }
}
