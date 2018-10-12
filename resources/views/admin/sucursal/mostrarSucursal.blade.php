@extends('layouts.app')

@section('content')
    <div class="row ">
        @foreach ($sucursal as $temp)
            <div class="col-sm">
                <div class="card mt-4 text-center" style="width: 18rem; height: 25rem;">
                    <img style="height: 150px; width: 150px; background-color: #1b1e21" class="card-img-top rounded-circle mx-auto d-block" src="img/{{$temp->foto}}" alt="Card image cap">
                    <div class="card-body">
                        <h2 class="card-header">{{$temp->nombre}}</h2>
                        <h5class="card-header">Direccion:{{$temp->direccion}}</h5><br>
                        <h5class="card-header">Telefono:{{$temp->telefono}}</h5><br>
                        <a href="{{route('editSucursal',['sucursal'=>$temp])}}" class="btn btn-primary">Editar</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection