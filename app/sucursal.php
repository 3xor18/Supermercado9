<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sucursal extends Model
{
    protected $fillable = [
        'nombre','foto','direccion','telefono'
    ];
}
