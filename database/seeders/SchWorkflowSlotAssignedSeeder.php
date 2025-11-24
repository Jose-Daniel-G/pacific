<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SchWorkflowSlotAssignedSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('sch_workflow_slot_assigned')->insert([
            'sch_slot_assigned_id' => 1,
        ]);
        DB::table('sch_workflow_slot_assigned')->insert([
            'sch_slot_assigned_id' => 2,
        ]);
    }
}
