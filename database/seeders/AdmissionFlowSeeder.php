<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdmissionFlowSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('adm_admission_flow')->insert([
            'adm_admission_id' => 1,
            'flow_status' => 'in-progress',
        ]);
        DB::table('adm_admission_flow')->insert([
            'adm_admission_id' => 2,
            'flow_status' => 'in-progress',
        ]);
    }
}
