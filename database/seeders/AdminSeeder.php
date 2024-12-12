<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run()
    {
        // Buat user superadmin
        $user = User::create([
            'name' => 'Super Admin',
            'email' => 'superadmin@example.com',
            'password' => Hash::make('password'),
        ]);

        // Tambahkan role superadmin di tabel admins
        Admin::create([
            'user_id' => $user->id,
            'role' => 'superadmin',
        ]);
    }
}

