<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ComQuotation extends Model
{
    protected $table = 'com_quotation';

    public function lines()
    {
        return $this->hasMany(ComQuotationLine::class, 'com_quotation_id');
    }
}
