<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdmAdmissionFlow extends Model
{
    protected $table = 'adm_admission_flow';

    public function admission()
    {
        return $this->belongsTo(AdmAdmission::class, 'adm_admission_id');
    }

    public function medicalOrder()
    {
        return $this->hasOne(CntMedicalOrder::class, 'adm_admission_flow_id');
    }
}
