<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SchWorkflowSlotAssigned extends Model
{
    protected $table = 'sch_workflow_slot_assigned';

    public function slotAssigned()
    {
        return $this->belongsTo(SchSlotAssigned::class, 'sch_slot_assigned_id');
    }
}
