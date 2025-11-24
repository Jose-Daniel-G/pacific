<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuotationLineSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('com_quotation_line')->insert([
            [
                'com_quotation_id' => 1,
                'description' => 'Ibuprofeno 400mg',
                'amount' => 50000,
            ],
            [
                'com_quotation_id' => 1,
                'description' => 'Acetaminofén 500mg',
                'amount' => 20000,
            ],
        ]);
    }
}
