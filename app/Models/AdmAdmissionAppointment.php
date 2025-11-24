<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdmAdmissionAppointment extends Model
{
    protected $table = 'adm_admission_appointment';

    public function admission()
    {
        return $this->belongsTo(AdmAdmission::class, 'adm_admission_id');
    }

    public function workflowSlot()
    {
        return $this->belongsTo(SchWorkflowSlotAssigned::class, 'flow_id');
    }
}
