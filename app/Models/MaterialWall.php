<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MaterialWall extends Model
{
    public $timestamps = false;

    public function realty()
    {
        return $this->hasMany(Realty::class);
    }
}
