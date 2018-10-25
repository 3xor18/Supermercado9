@extends('layouts.app')
@section('content')

    <div class="row p-4 text-center" >
        <div class="col-2 ">
            <img style="height: 150px; width: 150px; background-color: #1b1e21" class="card-img-top rounded-circle mx-auto d-block" src="/img/{{$empleado->foto}}" alt="Card image cap">
        </div>
        <div class="col-8 ">



                <div class="form-row">
                    <div class="col">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span style="background-color: #1c7430;" class="input-group-text text-light">RUT</span>
                            </div>
                            <input type="text"  class="form-control" disabled value="{{$empleado->rut}}">
                            <div class="invalid-feedback">
                                Por favor Complete Este Campo
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span style="background-color: #1c7430;"  class="input-group-text text-light" id="inputGroupPrepend">Nombre</span>
                            </div>
                            <input type="text"  class="form-control" disabled value="{{$empleado->nombre}}">
                            <div class="invalid-feedback">
                                Por Favor Complete este Campo
                            </div>
                        </div>

                    </div>
                    <div class="col">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span style="background-color: #1c7430;" class="input-group-text text-light" id="inputGroupPrepend">Apellido</span>
                            </div>
                            <input type="text"  class="form-control" disabled value="{{$empleado->apellido}}">
                            <div class="invalid-feedback">
                                Por favor Complete Este Campo
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-row mt-2">
                    <div class="col">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span style="background-color: #1c7430;" class="input-group-text text-light">Nacionalidad</span>
                            </div>
                            <input type="text"  class="form-control" disabled value="{{$empleado->nacionalidad}}">
                            <div class="invalid-feedback">
                                Por favor Complete Este Campo
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span style="background-color: #1c7430;" class="input-group-text text-light" id="inputGroupPrepend">Sexo</span>
                            </div>
                            <input type="text"  class="form-control" disabled value="{{$empleado->sexo}}">
                            <div class="invalid-feedback">
                                Por favor Complete Este Campo
                            </div>
                        </div>
                    </div>
                </div>
            <div class="form-row mt-2">
                <div class="col">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span style="background-color: #1c7430;" class="input-group-text text-light">Casco</span>
                        </div>
                        <input type="text"  class="form-control" disabled value="{{$empleado->casco}}">
                        <div class="invalid-feedback">
                            Por favor Complete Este Campo
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span style="background-color: #1c7430;" class="input-group-text text-light" id="inputGroupPrepend">Camisa</span>
                        </div>
                        <input type="text"  class="form-control" disabled value="{{$empleado->camisa}}">
                        <div class="invalid-feedback">
                            Por favor Complete Este Campo
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span style="background-color: #1c7430;" class="input-group-text text-light" id="inputGroupPrepend">Pantalones</span>
                        </div>
                        <input type="text"  class="form-control" disabled value="{{$empleado->pantalon}}">
                        <div class="invalid-feedback">
                            Por favor Complete Este Campo
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span style="background-color: #1c7430;" class="input-group-text text-light" id="inputGroupPrepend">Zapatos</span>
                        </div>
                        <input type="text"  class="form-control" disabled value="{{$empleado->zapatos}}">
                        <div class="invalid-feedback">
                            Por favor Complete Este Campo
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span style="background-color: #1c7430;" class="input-group-text text-light" id="inputGroupPrepend">Guantes</span>
                        </div>
                        <input type="text"  class="form-control" disabled value="{{$empleado->guantes}}">
                        <div class="invalid-feedback">
                            Por favor Complete Este Campo
                        </div>
                    </div>
                </div>
            </div>


                <?php

                $carbon = new \Carbon\Carbon();

                $fechac=App\asignacion::where('empleado',$empleado->rut)
                    ->where('casco','Casco')->orderBy('id', 'desc')->value('fecha_asig');
                if(is_null($fechac)){
                    $a=$casco='Sin Asignacion';
                }else{$casco = $carbon->parse($fechac);
                    $a=$casco->diffForHumans();}


                $fechac=App\asignacion::where('empleado',$empleado->rut)
                    ->where('zapatos','Zapatos')->orderBy('id', 'desc')->value('fecha_asig');
                if(is_null($fechac)){
                    $b=$casco='Sin Asignacion';
                }else{$casco = $carbon->parse($fechac);
                    $b=$casco->diffForHumans();}

                $fechac=App\asignacion::where('empleado',$empleado->rut)
                    ->where('pantalones','Pantalones')->orderBy('id', 'desc')->value('fecha_asig');
                if(is_null($fechac)){
                    $c=$casco='Sin Asignacion';
                }else{$casco = $carbon->parse($fechac);
                    $c=$casco->diffForHumans();}

                $fechac=App\asignacion::where('empleado',$empleado->rut)
                    ->where('camisa','Camisa')->orderBy('id', 'desc')->value('fecha_asig');
                if(is_null($fechac)){
                    $d=$casco='Sin Asignacion';
                }else{$casco = $carbon->parse($fechac);
                    $d=$casco->diffForHumans();}

                $fechac=App\asignacion::where('empleado',$empleado->rut)
                    ->where('bata','Bata Carnicera')->orderBy('id', 'desc')->value('fecha_asig');
                if(is_null($fechac)){
                    $e=$casco='Sin Asignacion';
                }else{$casco = $carbon->parse($fechac);
                    $e=$casco->diffForHumans();}

                $fechac=App\asignacion::where('empleado',$empleado->rut)
                    ->where('guantesmetalicos','Guante Metalico')->orderBy('id', 'desc')->value('fecha_asig');
                if(is_null($fechac)){
                    $f=$casco='Sin Asignacion';
                }else{$casco = $carbon->parse($fechac);
                    $f=$casco->diffForHumans();}

                ?>

            </h4>
            <hr>
            {!! Form::open(['route'=>'almacenarArticulosEmpleado','method'=>'POST','files'=>true]) !!}

                    <div class="form-row">
                        <div class="col-md-4 mb-3">
                            <input class="form-check-input" type="checkbox" name="casco" value="Casco">
                            <label class="form-check-label" for="gridCheck1">
                                Casco(<?php echo $a; ?>)
                            </label>
                        </div>
                        <div class="col-md-4 mb-3">
                            <input class="form-check-input" type="checkbox" name="zapatos" value="Zapatos">
                            <label class="form-check-label" for="gridCheck1">
                                Zapatos(<?php echo $b; ?>)
                            </label>
                        </div>
                        <div class="col-md-4 mb-3">
                            <input class="form-check-input" type="checkbox" name="pantalon" value="Pantalones">
                            <label class="form-check-label" for="gridCheck1">
                                Pantalon(<?php echo $c; ?>)
                            </label>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-4 mb-3">
                            <input class="form-check-input" type="checkbox" name="camisa" value="Camisa">
                            <label class="form-check-label" for="gridCheck1">
                                Camisa(<?php echo $d; ?>)
                            </label>
                        </div>
                        <div class="col-md-4 mb-3">
                            <input class="form-check-input" type="checkbox" name="bata" value="Bata Carnicera">
                            <label class="form-check-label" for="gridCheck1">
                                Bata Carnicera(<?php echo $e; ?>)
                            </label>
                        </div>
                        <div class="col-md-4 mb-3">
                            <input class="form-check-input" type="checkbox" name="guantemetalico" value="Guante Metalico">
                            <label class="form-check-label" for="gridCheck1">
                                Guante Metalico(<?php echo $f; ?>)
                            </label>
                        </div>
                    </div>


            <input type="hidden" value="{{$empleado->rut}}" name="rut">
            {!! Form::submit('Asignar',['class'=>'btn btn-outline-success my-2 my-sm-0']) !!}
            {!! Form::close() !!}
        </div>

    </div>
@endsection