<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SchCalendarSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('sch_calendar')->insert([
            'id' => 1,
            'entity_id' => 3, // doctor 1
            'calendar_name' => 'Agenda Dr. Pérez',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('sch_calendar')->insert([
            'id' => 2,
            'entity_id' => 1, // otro doctor
            'calendar_name' => 'Agenda Dr. Pérez',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
