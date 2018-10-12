<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class observacion extends Model
{
    protected $fillable = [
        'observacion','fecha','empleado'
    ];
}
