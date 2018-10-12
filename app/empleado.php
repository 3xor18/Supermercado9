<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class empleado extends Model
{
    protected $fillable = [
        'nombre', 'apellido', 'nacionalidad','estudios','rut','direccion','celular','celular_emergencia','correo','sexo',
        'fecha_nac','foto','camisa','pantalon','zapatos','guantes','casco','estado_civil','alergias','enfermedades','medicamentos',
        'afp','salud'
    ];
}
