<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuotationSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('com_quotation')->insert([
            'code' => 'COT-001',
            'total' => 250000,
        ]);
    }
}
