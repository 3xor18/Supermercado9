@extends('layouts.app')
@section('content')
    {!! Form::model($sucursal,['route'=>['updateSucursal',$sucursal],'method'=>'PUT','files'=>true]) !!}
    @include('admin.sucursal.form')
    {!! Form::submit('Actualizar',['class'=>'btn btn-primary']) !!}
    {!! Form::close() !!}
@endsection