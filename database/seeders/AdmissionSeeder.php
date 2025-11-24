<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdmissionSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('adm_admission')->insert([
            'patient_entity_id' => 1,
            'status' => 'active',
        ]);
    }
}
