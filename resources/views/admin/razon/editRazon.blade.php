@extends('layouts.app')
@section('content')
    {!! Form::model($razon,['route'=>['updateRazon',$razon],'method'=>'PUT']) !!}
    @include('admin.razon.form')
    {!! Form::submit('Actualizar',['class'=>'btn btn-primary']) !!}
    {!! Form::close() !!}
@endsection