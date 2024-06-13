<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'username' => 'admin',
                'password' => Hash::make('password123'),
                'email' => 'admin@example.com',
                'role' => 'admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'username' => 'manager',
                'password' => Hash::make('password123'),
                'email' => 'manager@example.com',
                'role' => 'manager',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'username' => 'client',
                'password' => Hash::make('password123'),
                'email' => 'client@example.com',
                'role' => 'client',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'username' => 'dev1',
                'password' => Hash::make('password123'),
                'email' => 'dev1@example.com',
                'role' => 'developer',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'username' => 'dev2',
                'password' => Hash::make('password123'),
                'email' => 'dev2@example.com',
                'role' => 'developer',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more users as needed
        ]);
    }
}
