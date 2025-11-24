<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SchEvent extends Model
{
    protected $table = 'sch_event';

    public function calendar()
    {
        return $this->belongsTo(SchCalendar::class, 'sch_calendar_id');
    }
}
