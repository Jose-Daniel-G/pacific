<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ComQuotationLine extends Model
{
    protected $table = 'com_quotation_line';

    public function quotation()
    {
        return $this->belongsTo(ComQuotation::class, 'com_quotation_id');
    }

    public function medicamentsQuotation()
    {
        return $this->hasMany(CntMedicalOrderMedicamentQuotation::class, 'line_id');
    }
}
