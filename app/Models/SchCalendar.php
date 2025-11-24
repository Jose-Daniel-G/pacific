<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SchCalendar extends Model
{
    protected $table = 'sch_calendar';

    public function doctor()
    {
        return $this->belongsTo(GblEntity::class, 'entity_id');
    }
}
