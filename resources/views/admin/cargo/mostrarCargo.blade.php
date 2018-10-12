@extends('layouts.app')

@section('content')
    <div class="card m-4 w-50">
        <div class="card-header">
            <h1 class="text-center">Cargos En Sistema</h1>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($cargo as $temp)
                    <tr>
                        <th scope="row">{{$temp->id}}</th>
                        <td>{{$temp->nombre}}</td>
                        <td><a href="{{route('editCargo',['cargo'=>$temp])}}" class="btn btn-primary">Editar</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection