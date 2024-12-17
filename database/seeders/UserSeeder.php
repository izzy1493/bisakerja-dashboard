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
        // Menambahkan data dummy untuk user
        DB::table('users')->insert([
            [
                'name' => 'Super Admin User',
                'email' => 'superadmin@example.com',
                'phone' => '081234567890',
                'role' => 'superadmin',
                'is_verified' => 1,
                'password' => Hash::make('password'), // Hash password
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Admin User',
                'email' => 'admin@example.com',
                'phone' => '081234567890',
                'role' => 'admin',
                'is_verified' => 1,
                'password' => Hash::make('password'), // Hash password
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Regular User',
                'email' => 'user@example.com',
                'phone' => '089876543210',
                'role' => 'user',
                'is_verified' => false,
                'password' => Hash::make('password'), // Hash password
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Verified User',
                'email' => 'verifieduser@example.com',
                'phone' => '082345678901',
                'role' => 'user',
                'is_verified' => 1,
                'password' => Hash::make('password'), // Hash password
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ]);
    }
}
