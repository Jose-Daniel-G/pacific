<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GblEntity extends Model
{
    protected $table = 'gbl_entity';

    public function admissions()
    {
        return $this->hasMany(AdmAdmission::class, 'patient_entity_id');
    }

    public function calendars()
    {
        return $this->hasMany(SchCalendar::class, 'entity_id');
    }
}
