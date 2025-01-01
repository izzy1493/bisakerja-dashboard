<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\UserVerification;

class UserVerificationSeeder extends Seeder
{
    public function run()
    {
        // Ambil user pertama untuk verifikasi
        $user = User::first();

        // Menambah data verifikasi pengguna dengan status Pending
        UserVerification::create([
            'user_id' => $user->id, // Pastikan menggunakan ID user yang ada
            'id_card_number' => '1234567890123456',
            'id_card_photo' => 'path/to/id_card_photo.jpg',
            'selfie_photo' => 'path/to/selfie_photo.jpg',
            'status' => 'Pending',
            'verified_at' => null, // Status Pending berarti belum diverifikasi
        ]);

        // Menambah data verifikasi pengguna dengan status Approved
        UserVerification::create([
            'user_id' => $user->id,
            'id_card_number' => '9876543210987654',
            'id_card_photo' => 'path/to/approved_id_card_photo.jpg',
            'selfie_photo' => 'path/to/approved_selfie_photo.jpg',
            'status' => 'Approved',
            'verified_at' => now(), // Menambahkan timestamp verifikasi
        ]);

        // Menambah data verifikasi pengguna dengan status Rejected
        UserVerification::create([
            'user_id' => $user->id,
            'id_card_number' => '1122334455667788',
            'id_card_photo' => 'path/to/rejected_id_card_photo.jpg',
            'selfie_photo' => 'path/to/rejected_selfie_photo.jpg',
            'status' => 'Rejected',
            'verified_at' => now(), // Timestamp verifikasi meskipun statusnya ditolak
        ]);
    }
}
