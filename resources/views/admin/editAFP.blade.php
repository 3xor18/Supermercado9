@extends('layouts.app')
@section('content')
    {!! Form::model($afp,['route'=>['updateAfp',$afp],'method'=>'PUT']) !!}
    @include('admin.formAfp')
    {!! Form::submit('Actualizar',['class'=>'btn btn-primary']) !!}
    {!! Form::close() !!}
@endsection