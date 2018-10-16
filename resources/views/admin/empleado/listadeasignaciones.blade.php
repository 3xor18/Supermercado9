@extends('layouts.app')

@section('content')
    <div class="card m-4 w-50">
        <div class="card-header">
            <h1 class="text-center">Reportes De Asignaciones</h1>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Rut Empleado</th>
                    <th scope="col">Nombre Empleado</th>
                    <th scope="col">Fecha</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($asignacion as $temp)
                    <tr>
                        <th scope="row">{{$temp->id}}</th>
                        <td>{{$temp->empleado}}</td>
                        <td>{{$temp->empleado}}</td>
                        <td>{{$temp->fecha_asig}}</td>
                        <td><a href="{{route('editRazon',['razon'=>$temp])}}" class="btn btn-primary">Imprimir</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection