<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CntMedicalOrder extends Model
{
    protected $table = 'cnt_medical_order';

    public function admissionFlow()
    {
        return $this->belongsTo(AdmAdmissionFlow::class, 'adm_admission_flow_id');
    }

    public function medicaments()
    {
        return $this->hasMany(CntMedicalOrderMedicament::class, 'cnt_medical_order_id');
    }
}
