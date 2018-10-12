@extends('layouts.app')
@section('content')
    {!! Form::model($salud,['route'=>['updateSalud',$salud],'method'=>'PUT']) !!}
    @include('admin.salud.form')
    {!! Form::submit('Actualizar',['class'=>'btn btn-primary']) !!}
    {!! Form::close() !!}
@endsection