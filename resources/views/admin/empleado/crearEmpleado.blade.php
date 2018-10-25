@extends('layouts.app')
@section('content')
    <div class="card m-4 w-80">
        <div class="card-header text-light" style="background-color: #1c7430;">
            <h1>Registro De Empleados al Sistema</h1>
        </div>
        <div class="card-body">
            {!! Form::open(['route'=>'almacenarEmpleado','method'=>'POST','files'=>true]) !!}
            @include('admin.empleado.form')
            <br>

            {!! Form::submit('Guardar',['class'=>'btn btn-outline-success my-222 my-sm-110']) !!}
            {!! Form::close() !!}
        </div>
    </div>

@endsection