<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class asignacion extends Model
{
    protected $fillable = [
        'nombre','empleado','fecha_asig'
    ];
}
