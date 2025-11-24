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
        Schema::create('cnt_medical_order_medicament_quotation', function (Blueprint $table) {
            $table->id();
            $table->foreignId('line_id')->constrained('com_quotation_line');
            $table->foreignId('cnt_medical_order_medicament_id')->constrained('cnt_medical_order_medicament');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cnt_medical_order_medicament_quotation');
    }
};
