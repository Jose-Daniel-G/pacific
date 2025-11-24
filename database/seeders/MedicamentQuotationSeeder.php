<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MedicamentQuotationSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('cnt_medical_order_medicament_quotation')->insert([
            [
                'line_id' => 1,
                'cnt_medical_order_medicament_id' => 1,
            ],
            [
                'line_id' => 2,
                'cnt_medical_order_medicament_id' => 2,
            ],
        ]);
    }
}
