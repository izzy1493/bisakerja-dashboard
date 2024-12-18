<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Data pengguna yang akan di-seed
        $users = [
            [
                'name' => 'Super Admin User',
                'email' => 'superadmin@example.com',
                'password' => Hash::make('password'), // Hash password
                'phone' => '081234567890',
                'role' => 'superadmin',
                'is_verified' => true,
            ],
            [
                'name' => 'Admin User',
                'email' => 'admin@example.com',
                'password' => Hash::make('password'), // Hash password
                'phone' => '081234567890',
                'role' => 'admin',
                'is_verified' => true,
            ],
            [
                'name' => 'Pelamar User',
                'email' => 'pelamar@example.com',
                'password' => Hash::make('password'), // Hash password
                'phone' => '089876543210',
                'role' => 'pelamar',
                'is_verified' => false,
            ],
            [
                'name' => 'Penyedia User',
                'email' => 'penyedia@example.com',
                'password' => Hash::make('password'), // Hash password
                'phone' => '082345678901',
                'role' => 'penyedia',
                'is_verified' => true,
            ],
        ];

        // Iterasi setiap pengguna dan gunakan updateOrInsert
        foreach ($users as $user) {
            DB::table('users')->updateOrInsert(
                ['email' => $user['email']], // Kondisi untuk mencari pengguna
                [
                    'name' => $user['name'],
                    'password' => $user['password'],
                    'phone' => $user['phone'],
                    'role' => $user['role'],
                    'is_verified' => $user['is_verified'],
                    'updated_at' => Carbon::now(),
                    'created_at' => DB::table('users')->where('email', $user['email'])->exists() ? DB::raw('created_at') : Carbon::now(),
                ]
            );
        }
    }
}
