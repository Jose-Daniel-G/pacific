<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SchSlot extends Model
{
    protected $table = 'sch_slot';

    public function event()
    {
        return $this->belongsTo(SchEvent::class, 'sch_event_id');
    }
}
