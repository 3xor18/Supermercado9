<div class="form-group">
    {!! Form::label('rut','Rut') !!}
    {!! Form::text('rut',null,['class'=>'form-control','placeholder' => 'Ejemplo: 3101111111']) !!}
</div>
<div class="form-group">
    {!! Form::label('name','Nombre') !!}
    {!! Form::text('nombre',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('apellido','Apellido') !!}
    {!! Form::text('apellido',null,['class'=>'form-control']) !!}

</div>
<div class="form-group">
    {!! Form::label('nacionalidad','Nacionalidad') !!}
    {!! Form::text('nacionalidad',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('estudios','Estudios') !!}
    {!! Form::text('estudios',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('direccion','Direccion') !!}
    {!! Form::textarea('direccion',null,['class'=>'form-control','rows' => 2,'cols' => 10]) !!}
</div>
<div class="form-group">
    {!! Form::label('celular','Celular') !!}
    {!! Form::text('celular',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('celular_emergencia','Celular de Emergencia') !!}
    {!! Form::text('celular_emergencia',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('correo','Correo') !!}
    {!! Form::text('correo',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('sexo','Sexo') !!}
    {!! Form::select('sexo', ['Seleccione'=>'Seleccione','Femenino' => 'Femenino', 'Masculino' => 'Masculino']) !!}
</div>
<div class="form-group">
    {!! Form::label('fecha_nac','Fecha de Nacimiento') !!}
    {!! Form::date('fecha_nac'); !!}
</div>
<div class="form-group">
    {!! Form::label('foto','Foto') !!}
    {!! Form::file('foto') !!}
</div>
<div class="form-group">
    {!! Form::label('camisa','Talla de Camisa') !!}
    {!! Form::text('camisa',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('pantalon','Talla de Pantalon') !!}
    {!! Form::text('pantalon',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('zapatos','Talla de Zapatos') !!}
    {!! Form::text('zapatos',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('guantes','Talla de Guantes') !!}
    {!! Form::text('guantes',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('casco','Talla de Casco') !!}
    {!! Form::text('casco',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('estado_civil','Estado Civil') !!}
    {!! Form::text('estado_civil',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('alergias','Alergias') !!}
    {!! Form::textarea('alergias',null,['class'=>'form-control','rows' => 2,'cols' => 10]) !!}
</div>
<div class="form-group">
    {!! Form::label('enfermedades','Enfermedades') !!}
    {!! Form::textarea('enfermedades',null,['class'=>'form-control','rows' => 2,'cols' => 10]) !!}
</div>
<div class="form-group">
    {!! Form::label('medicamentos','Medicamentos') !!}
    {!! Form::textarea('medicamentos',null,['class'=>'form-control','rows' => 2,'cols' => 10]) !!}
</div>
