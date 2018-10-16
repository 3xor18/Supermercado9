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

                    <div class="form-row">
                        <div class="col-md-4 mb-3">
                            <input class="form-check-input" type="checkbox" name="casco" value="Casco">
                            <label class="form-check-label" for="gridCheck1">
                                Casco
                            </label>
                        </div>
                        <div class="col-md-4 mb-3">
                            <input class="form-check-input" type="checkbox" name="zapatos" value="Zapatos">
                            <label class="form-check-label" for="gridCheck1">
                                Zapatos
                            </label>
                        </div>
                        <div class="col-md-4 mb-3">
                            <input class="form-check-input" type="checkbox" name="pantalon" value="Pantalones">
                            <label class="form-check-label" for="gridCheck1">
                                Pantalon
                            </label>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-4 mb-3">
                            <input class="form-check-input" type="checkbox" name="camisa" value="Camisa">
                            <label class="form-check-label" for="gridCheck1">
                                Camisa
                            </label>
                        </div>
                        <div class="col-md-4 mb-3">
                            <input class="form-check-input" type="checkbox" name="bata" value="Bata Carnicera">
                            <label class="form-check-label" for="gridCheck1">
                                Bata Carnicera
                            </label>
                        </div>
                        <div class="col-md-4 mb-3">
                            <input class="form-check-input" type="checkbox" name="guantemetalico" value="Guante Metalico">
                            <label class="form-check-label" for="gridCheck1">
                                Guante Metalico
                            </label>
                        </div>
                    </div>


            <input type="hidden" value="{{$empleado->rut}}" name="rut">
            {!! Form::submit('Asignar',['class'=>'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>

    </div>
@endsection