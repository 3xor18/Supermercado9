@extends('layouts.app')
@section('content')
    {!! Form::model($cargo,['route'=>['updateCargo',$cargo],'method'=>'PUT']) !!}
    @include('admin.cargo.form')
    {!! Form::submit('Actualizar',['class'=>'btn btn-primary']) !!}
    {!! Form::close() !!}
@endsection