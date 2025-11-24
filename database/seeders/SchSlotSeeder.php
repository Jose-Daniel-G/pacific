<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SchSlotSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('sch_slot')->insert([
            [
                'sch_event_id' => 1,
                'init_time' => '08:00',
                'end_time' => '08:30',
            ],
            [
                'sch_event_id' => 1,
                'init_time' => '08:30',
                'end_time' => '09:00',
            ],
        ]);
        DB::table('sch_slot')->insert([
            [
                'sch_event_id' => 2,
                'init_time' => '05:00',
                'end_time' => '08:30',
            ],
            [
                'sch_event_id' => 2,
                'init_time' => '08:30',
                'end_time' => '02:00',
            ],
        ]);
    }
}
