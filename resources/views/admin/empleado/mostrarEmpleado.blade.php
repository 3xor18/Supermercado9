@extends('layouts.app')

@section('content')
    <h1>Empleados en Sistema</h1>
    <div class="row ">

        @foreach ($empleado as $temp)


            <div class="col-sm">
                <div class="card mt-4 text-center" style="width: 18rem; height: 25rem;">
                    <img style="height: 150px; width: 150px; background-color: #1b1e21" class="card-img-top rounded-circle mx-auto d-block" src="img/{{$temp->foto}}" alt="Card image cap">
                    <div class="card-body">
                        <h2 class="card-header">{{$temp->nombre}} {{$temp->apellido}}</h2>
                        <p> Rut:{{$temp->rut}}<br>
                        Celular:{{$temp->celular}}<br>
                            Razon:{{$a=App\razon_empleado::where('empleado',$temp->rut)->value('razon')}}<br>
                            Cargo:{{$b=App\razon_empleado::where('empleado',$temp->rut)->value('cargo')}}<br>
                            Estatus:{{$c=App\razon_empleado::where('empleado',$temp->rut)->value('estatus')}}<br>
                        <a href="{{route('detalleEmpleado',['empleado'=>$temp])}}"  class="btn btn-primary">Articulo</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection