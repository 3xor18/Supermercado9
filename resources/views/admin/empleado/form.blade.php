
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
    {!! Form::select('camisa', ['Seleccione'=>'Seleccione','m' => 'm', 's' => 's', 'l' => 'l', 'XL' => 'XL', 'XXL' => 'XXL']) !!}
</div>
<div class="form-group">
    {!! Form::label('pantalon','Talla de Pantalon') !!}
    {!! Form::select('pantalon', ['Seleccione'=>'Seleccione','25'=>'25','26'=>'26','27'=>'27','28'=>'28']) !!}
</div>
<div class="form-group">
    {!! Form::label('zapatos','Talla de Zapatos') !!}
    {!! Form::select('zapatos', ['Seleccione'=>'Seleccione','25'=>'25','26'=>'26','27'=>'27','28'=>'28']) !!}
</div>
<div class="form-group">
    {!! Form::label('guantes','Talla de Guantes') !!}
    {!! Form::select('guantes', ['Seleccione'=>'Seleccione','m' => 'm', 's' => 's', 'l' => 'l', 'XL' => 'XL', 'XXL' => 'XXL']) !!}
</div>
<div class="form-group">
    {!! Form::label('casco','Talla de Casco') !!}
    {!! Form::select('casco', ['Seleccione'=>'Seleccione','m' => 'm', 's' => 's', 'l' => 'l', 'XL' => 'XL', 'XXL' => 'XXL']) !!}
</div>
<div class="form-group">
    {!! Form::label('estado_civil','Estado Civil') !!}
    {!! Form::select('estado_civil', ['Seleccione'=>'Seleccione','Soltero' => 'Soltero', 'Casado' => 'Casado',
    'Divorsiado'=>'Divorsiado','Viudo'=>'Viudo'
    ]) !!}
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

<div class="form-group">
    {!! Form::label('medicamentos','Afp') !!}
    <select name="afp" class="form-control">
        <option>Seleccione</option>
        {{$afp=App\afp::all()}}
        @foreach($afp as $category)
            <option>{{$category->nombre}}</option>
        @endforeach
    </select>
</div>

<div class="form-group">
    {!! Form::label('medicamentos','Salud') !!}
    <select name="salud" class="form-control">
        <option>Seleccione</option>
        {{$salud=App\salud::all()}}
        @foreach($salud as $ca)
            <option>{{$ca->nombre}}</option>
        @endforeach
    </select>
</div>

<div class="form-group">
    {!! Form::label('medicamentos','Cargo') !!}
    <select name="cargo" class="form-control">
        <option>Seleccione</option>
        {{$cargo=App\cargo::all()}}
        @foreach($cargo as $ca)
            <option>{{$ca->nombre}}</option>
        @endforeach
    </select>
</div>
<div class="form-group">
    {!! Form::label('medicamentos','Sucursal') !!}
    <select name="sucursal" class="form-control">
        <option>Seleccione</option>
        {{$sucursal=App\sucursal::all()}}
        @foreach($sucursal as $ca)
            <option>{{$ca->nombre}}</option>
        @endforeach
    </select>
</div>
<div class="form-group">
    {!! Form::label('medicamentos','Razon Social') !!}
    <select name="razon" class="form-control">
        <option>Seleccione</option>
        {{$razon=App\razon::all()}}
        @foreach($razon as $ca)
            <option>{{$ca->nombre}}</option>
        @endforeach
    </select>
</div>
<div class="form-group">
    {!! Form::label('fecha_nac','Fecha de Contrato') !!}
    {!! Form::date('fecha_contrato'); !!}
</div>
<div class="form-group">
    {!! Form::label('alergias','Observacion Inicial') !!}
    {!! Form::textarea('observacion',null,['class'=>'form-control','rows' => 2,'cols' => 10]) !!}
</div>
