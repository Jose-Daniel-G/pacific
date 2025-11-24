<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdmissionAppointmentSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('adm_admission_appointment')->insert([
            'adm_admission_id' => 1,
            'flow_id' => 1, // workflow slot
        ]);
    }
}
