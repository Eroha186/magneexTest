<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Realty extends Model
{
    protected $table = 'realty';

    public $timestamps = false;

    public function street()
    {
        return $this->belongsTo(Street::class);
    }

    public function materialWall()
    {
        return $this->belongsTo(MaterialWall::class);
    }

    public function typeRealty()
    {
        return $this->belongsTo(TypeRealty::class);
    }
}
