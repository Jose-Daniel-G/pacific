<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SchEventSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('sch_event')->insert([
            'sch_calendar_id' => 1,
            'init_date' => '2025-11-24',
            'end_date' => '2025-11-24',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('sch_event')->insert([
            'sch_calendar_id' => 2,
            'init_date' => '2025-10-30',
            'end_date' => '2025-10-30',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
