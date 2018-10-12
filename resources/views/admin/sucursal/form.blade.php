<div class="form-group">
    {!! Form::label('nombre','Nombre') !!}
    {!! Form::text('nombre',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('telefono','Telefono') !!}
    {!! Form::text('telefono',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('direccion','Direccion') !!}
    {!! Form::textarea('direccion',null,['class'=>'form-control','rows' => 2,'cols' => 10]) !!}
</div>
<div class="form-group">
    {!! Form::label('foto','Foto') !!}
    {!! Form::file('foto') !!}
</div>