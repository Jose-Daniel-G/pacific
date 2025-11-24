<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        $this->call([
            GblEntitySeeder::class,
            SchCalendarSeeder::class,
            SchEventSeeder::class,
            SchSlotSeeder::class,
            SchSlotAssignedSeeder::class,
            SchWorkflowSlotAssignedSeeder::class,
            AdmissionSeeder::class,
            AdmissionFlowSeeder::class,
            AdmissionAppointmentSeeder::class,
            MedicalOrderSeeder::class,
            MedicalOrderMedicamentSeeder::class,
            QuotationSeeder::class,
            QuotationLineSeeder::class,
            MedicamentQuotationSeeder::class,
        ]);
    }
}
