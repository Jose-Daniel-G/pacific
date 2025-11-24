<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MedicalOrderMedicamentSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('cnt_medical_order_medicament')->insert([
            [
                'cnt_medical_order_id' => 1,
                'medicament_name' => 'Ibuprofeno 400mg',
                'quantity' => 10,
            ],
            [
                'cnt_medical_order_id' => 1,
                'medicament_name' => 'Acetaminofén 500mg',
                'quantity' => 12,
            ],
        ]);
    }
}
