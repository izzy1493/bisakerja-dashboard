<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        // Menambah data user dengan role SuperAdmin
        User::updateOrCreate(
            ['email' => 'superadmin@example.com'],
            [
                'name' => 'Super Admin',
                'password' => Hash::make('password'),
                'phone' => '081234567890',
                'role' => 'superAdmin',
                'is_verified' => true,
            ]
        );

        // Menambah data user dengan role Admin
        User::updateOrCreate(
            ['email' => 'admin@example.com'],
            [
                'name' => 'Admin User',
                'password' => Hash::make('password'),
                'phone' => '081234567891',
                'role' => 'admin',
                'is_verified' => true,
            ]
        );

        // Menambah data user dengan role WorkProvider
        User::updateOrCreate(
            ['email' => 'penyedia@example.com'],
            [
                'name' => 'Work Provider',
                'password' => Hash::make('password'),
                'phone' => '081234567892',
                'role' => 'penyedia',
                'is_verified' => false,
            ]
        );

        // Menambah data user dengan role JobSeeker
        User::updateOrCreate(
            ['email' => 'pencari@example.com'],
            [
                'name' => 'Job Seeker',
                'password' => Hash::make('password'),
                'phone' => '081234567893',
                'role' => 'pencari',
                'is_verified' => true,
            ]
        );

        // Data tambahan
        $additionalUsers = [
            [
                'name' => 'Second Admin',
                'email' => 'admin2@example.com',
                'password' => Hash::make('password'),
                'phone' => '081234567894',
                'role' => 'admin',
                'is_verified' => true,
            ],
            [
                'name' => 'Provider 2',
                'email' => 'penyedia2@example.com',
                'password' => Hash::make('password'),
                'phone' => '081234567895',
                'role' => 'penyedia',
                'is_verified' => true,
            ],
            [
                'name' => 'Seeker 2',
                'email' => 'pencari2@example.com',
                'password' => Hash::make('password'),
                'phone' => '081234567896',
                'role' => 'pencari',
                'is_verified' => false,
            ],
        ];

        foreach ($additionalUsers as $user) {
            User::updateOrCreate(
                ['email' => $user['email']],
                $user
            );
        }
    }
}
