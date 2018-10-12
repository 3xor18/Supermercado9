<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class razon_empleado extends Model
{
    protected $fillable = [
        'empleado','razon','fecha_ini','fecha_fin','estatus','st'
    ];
}
