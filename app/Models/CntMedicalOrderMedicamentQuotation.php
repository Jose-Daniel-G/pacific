<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CntMedicalOrderMedicamentQuotation extends Model
{
    protected $table = 'cnt_medical_order_medicament_quotation';

    public function line()
    {
        return $this->belongsTo(ComQuotationLine::class, 'line_id');
    }

    public function medicament()
    {
        return $this->belongsTo(CntMedicalOrderMedicament::class, 'cnt_medical_order_medicament_id');
    }
}
