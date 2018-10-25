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
                    <th scope="col">Apellido Empleado</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Asignaciones</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($asignacion as $temp)
                    <?php  $s=$temp->id; ?>
                    <tr>
                        <th scope="row">{{$temp->id}}</th>
                        <td>{{$a=$temp->empleado}}</td>
                        <td>{{$b=App\empleado::where('rut',$a)->value('nombre')}}</td>
                        <td>{{$c=App\empleado::where('rut',$a)->value('Apellido')}}</td>
                        <td>{{\Carbon\Carbon::parse($temp->fecha_asig)->format('d/m/Y')}}</td>
                        <td>
                            <?php $b=App\asignacion::where('id',$s)->value('casco'); $h='';?>
                            <?php $a=App\asignacion::where('id',$s)->value('bata')?>
                            <?php $c=App\asignacion::where('id',$s)->value('camisa')?>
                            <?php $d=App\asignacion::where('id',$s)->value('pantalones')?>
                            <?php $e=App\asignacion::where('id',$s)->value('guantesmetalicos')?>
                            <?php $f=App\asignacion::where('id',$s)->value('zapatos')?>
                            @if ($b)
                               <?php $h='Casco,'; ?>
                            @endif
                                @if ($a)
                                    <?php $h=$h.' Bata carnicera,'; ?>
                                @endif
                                @if ($c)
                                    <?php $h=$h.' Camisa,'; ?>
                                @endif
                                @if ($d)
                                    <?php $h=$h.' Pantalones,'; ?>
                                @endif
                                @if ($e)
                                    <?php $h=$h.' Guantes Metalicos,'; ?>
                                @endif
                                @if ($f)
                                    <?php $h=$h.' Zapatos,'; ?>
                                @endif
                            {{$h}}
                        </td>
                        <td><a href="{{route('imprimirreporte',['asignacion'=>$temp])}}" class="btn btn-primary">Imprimir</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection