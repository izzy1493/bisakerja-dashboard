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
        User::create([
            'name' => 'Super Admin',
            'email' => 'superadmin@example.com',
            'password' => Hash::make('password'),
            'phone' => '081234567890',
            'role' => 'superAdmin',
            'is_verified' => true,
        ]);

        // Menambah data user dengan role Admin
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
            'phone' => '081234567891',
            'role' => 'admin',
            'is_verified' => true,
        ]);

        // Menambah data user dengan role WorkProvider
        User::create([
            'name' => 'Work Provider',
            'email' => 'penyedia@example.com',
            'password' => Hash::make('password'),
            'phone' => '081234567892',
            'role' => 'penyedia',
            'is_verified' => false,
        ]);

        // Menambah data user dengan role JobSeeker
        User::create([
            'name' => 'Job Seeker',
            'email' => 'pencari@example.com',
            'password' => Hash::make('password'),
            'phone' => '081234567893',
            'role' => 'pencari',
            'is_verified' => true,
        ]);
    }
}
