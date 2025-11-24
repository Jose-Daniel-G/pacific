<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GblEntitySeeder extends Seeder
{
    public function run(): void
    {
        DB::table('gbl_entity')->insert([
            [
                'first_name' => 'Carlos',
                'last_name' => 'Gómez',
                'identification' => '100200300',
                'phone' => '3001112222',
                'entity_type' => 'patient',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'first_name' => 'Alajndra',
                'last_name' => 'Gutiérrez',
                'identification' => '100200600',
                'phone' => '3001114222',
                'entity_type' => 'patient',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'first_name' => 'Valentina',
                'last_name' => 'Pérez',
                'identification' => '900100200',
                'phone' => '3102223333',
                'entity_type' => 'doctor',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
