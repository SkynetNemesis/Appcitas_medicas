<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    public function citas()
    {
        return $this->hasMany(Cita::class);
    }
}
