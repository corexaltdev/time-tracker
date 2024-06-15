<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projects = [
            [
                'user_id' => 3,
                'name' => 'Cafe Analytics',
                'description' => 'Analytical website',
                'status' => 'request',
                'feedback' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 3,
                'name' => 'Bicycle Website',
                'description' => 'Portfolio of bicycle website',
                'status' => 'request',
                'feedback' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('projects')->insert($projects);
    }
}
