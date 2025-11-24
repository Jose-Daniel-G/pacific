<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SchSlotAssigned extends Model
{
    protected $table = 'sch_slot_assigned';

    public function patient()
    {
        return $this->belongsTo(GblEntity::class, 'entity_id');
    }

    public function slot()
    {
        return $this->belongsTo(SchSlot::class, 'sch_slot_id');
    }

    public function workflow()
    {
        return $this->hasOne(SchWorkflowSlotAssigned::class, 'sch_slot_assigned_id');
    }
}
