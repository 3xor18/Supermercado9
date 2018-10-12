@extends('layouts.app')
@section('content')
    <div class="row p-4 text-center" >
        <div class="col-12 ">
            <img style="height: 150px; width: 150px; background-color: #1b1e21" class="card-img-top rounded-circle mx-auto d-block" src="/images/{{$sucursal->foto}}" alt="Card image cap">

            <h1 class="align-content-center">{{$sucursal->nombre}}</h1>
            <p>{{$sucursal->direccion}}</p>
            <a href="{{route('editSucursal',['sucursal'=>$sucursal])}}" class="btn btn-primary">Editar</a>
        </div>

    </div>
@endsection