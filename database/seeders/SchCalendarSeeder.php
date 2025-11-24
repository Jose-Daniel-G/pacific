<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SchCalendarSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('sch_calendar')->insert([
            'entity_id' => 2, // doctor
            'calendar_name' => 'Agenda Dr. Pérez',
        ]);
    }
}
