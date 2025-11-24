<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SchSlotAssignedSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('sch_slot_assigned')->insert([
            'entity_id' => 1, // paciente
            'sch_slot_id' => 1, // slot 8:00
        ]);
    }
}
