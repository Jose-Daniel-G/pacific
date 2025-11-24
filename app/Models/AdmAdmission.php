<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdmAdmission extends Model
{
    protected $table = 'adm_admission';

    public function patient()
    {
        return $this->belongsTo(GblEntity::class, 'patient_entity_id');
    }

    public function flows()
    {
        return $this->hasMany(AdmAdmissionFlow::class, 'adm_admission_id');
    }

    public function appointments()
    {
        return $this->hasMany(AdmAdmissionAppointment::class, 'adm_admission_id');
    }
}
