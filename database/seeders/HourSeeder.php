<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('hours')->insert([
            ['start' => '06:00:00', 'end' => '07:00:00', 'service_id' => 1],
            ['start' => '07:00:00', 'end' => '08:00:00', 'service_id' => 1],
            ['start' => '08:00:00', 'end' => '09:00:00', 'service_id' => 1],
            // M
            ['start' => '15:00:00', 'end' => '16:00:00', 'service_id' => 1],
            ['start' => '16:00:00', 'end' => '17:00:00', 'service_id' => 1],
            ['start' => '17:00:00', 'end' => '18:00:00', 'service_id' => 1],
            ['start' => '18:00:00', 'end' => '19:00:00', 'service_id' => 1],
            ['start' => '19:00:00', 'end' => '20:00:00', 'service_id' => 1],
            ['start' => '20:00:00', 'end' => '21:00:00', 'service_id' => 1],
        ]);

        DB::table('hours')->insert([
            ['start' => '07:00:00', 'end' => '08:00:00', 'service_id' => 2],
            ['start' => '08:00:00', 'end' => '09:00:00', 'service_id' => 2],
            ['start' => '09:00:00', 'end' => '10:00:00', 'service_id' => 2],
            // M
            ['start' => '15:00:00', 'end' => '16:00:00', 'service_id' => 2],
            ['start' => '16:00:00', 'end' => '17:00:00', 'service_id' => 2],
            ['start' => '17:00:00', 'end' => '18:00:00', 'service_id' => 2],
        ]);
    }
}
