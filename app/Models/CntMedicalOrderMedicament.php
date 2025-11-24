<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CntMedicalOrderMedicament extends Model
{
    protected $table = 'cnt_medical_order_medicament';

    public function medicalOrder()
    {
        return $this->belongsTo(CntMedicalOrder::class, 'cnt_medical_order_id');
    }

    public function quotationMedicaments()
    {
        return $this->hasMany(CntMedicalOrderMedicamentQuotation::class, 'cnt_medical_order_medicament_id');
    }
}
