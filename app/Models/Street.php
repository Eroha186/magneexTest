<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Street extends Model
{
    public $timestamps = false;

    public function realty()
    {
        return $this->hasMany(Realty::class);
    }

    public function district()
    {
        return $this->belongsTo(District::class);
    }
}
