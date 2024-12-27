<?php

namespace Database\Seeders;

use App\Models\Court;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourtSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Court::insert([
            ['court_number' => 'Court 1', 'created_at' => now(), 'updated_at' => now()],
            ['court_number' => 'Court 2', 'created_at' => now(), 'updated_at' => now()],
            ['court_number' => 'Court 3', 'created_at' => now(), 'updated_at' => now()],
            ['court_number' => 'Court 4', 'created_at' => now(), 'updated_at' => now()],
            ['court_number' => 'Court 5', 'created_at' => now(), 'updated_at' => now()],
            ['court_number' => 'Court 6', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
