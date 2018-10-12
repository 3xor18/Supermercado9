@extends('layouts.app')
@section('content')
    <div class="card m-4 w-50">
        <div class="card-header">
            <h1>Registro De Cargo al Sistema</h1>
        </div>
        <div class="card-body">
            {!! Form::open(['route'=>'almacenarCargo','method'=>'POST']) !!}
            @include('admin.cargo.form')
            {!! Form::submit('Guardar',['class'=>'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@endsection