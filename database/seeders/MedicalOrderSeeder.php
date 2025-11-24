<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MedicalOrderSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('cnt_medical_order')->insert([
            'adm_admission_flow_id' => 1,
            'notes' => 'Paciente presenta síntomas leves de infección respiratoria.',
        ]);
        DB::table('cnt_medical_order')->insert([
            'adm_admission_flow_id' => 2,
            'notes' => 'Paciente presenta síntomas leves de fiebre.',
        ]);
    }
}
