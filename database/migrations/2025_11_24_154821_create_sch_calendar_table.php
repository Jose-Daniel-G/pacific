<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('sch_calendar', function (Blueprint $table) {
            $table->id();
            $table->foreignId('entity_id')->constrained('gbl_entity'); // profesional de salud
            $table->string('calendar_name')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sch_calendar');
    }
};
