@extends('layouts.app')
@section('content')
    <div class="row p-4 text-center" >
        <div class="col-2 ">
            <img style="height: 150px; width: 150px; background-color: #1b1e21" class="card-img-top rounded-circle mx-auto d-block" src="/img/{{$empleado->foto}}" alt="Card image cap">
        </div>
        <div class="col-6 ">

           <h4> <strong>Nombre:</strong>{{$empleado->nombre}} {{$empleado->apellido}}<br>
               <strong> Rut: </strong> {{$empleado->rut}}<strong>Sexo:</strong>{{$empleado->sexo}}<br>
               <strong> Camisa: </strong> {{$empleado->camisa}}<strong>Zapatos:</strong>{{$empleado->zapatos}}
               <strong>Pantalon:</strong>{{$empleado->pantalon}} <strong>Guantes:</strong>{{$empleado->guantes}}
               <strong>Casco:</strong>{{$empleado->casco}}<br>



           </h4>
            <hr>
            {!! Form::open(['route'=>'almacenarArticulosEmpleado','method'=>'POST','files'=>true]) !!}
            @foreach ($proveedores=App\articulo::all() as $proveedor)
                <label>{{ Form::checkbox('prov[]', $proveedor->id) }} {{ $proveedor->nombre }}</label>
            @endforeach <br>
            <input type="hidden" value="{{$empleado->rut}}" name="rut">
            {!! Form::submit('Asignar',['class'=>'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>

    </div>
@endsection