<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('services')->insert([
            ['name' => 'entrenamiento', 'duration' => 30, 'duration_type' => 'days', 'price' => 30000],
            ['name' => 'terapia', 'duration' => 20, 'duration_type' => 'sessions', 'price' => 20000],
        ]);
    }
}
