<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <STYLE type="text/css">
        p {text-align: left}
    </STYLE>
</head>
<body>
<img src="img/logo.png" alt="" style="margin-left: 150px"><br><br><br>
<p >Yo, <strong>{{App\empleado::where('rut',$asignacion->empleado)->value('nombre')}} {{App\empleado::where('rut',$asignacion->empleado)->value('Apellido')}}</strong> Portador del documento de identidad
 <strong>{{$asignacion->empleado}}</strong> Hago Constrar que Recibi de la Empresa el dia:
    <strong>{{\Carbon\Carbon::parse($asignacion->fecha_asig)->format('d/m/Y')}}</strong>
    los Siguientes Materiales:</p>
<ul>
    @if ($asignacion->casco)
        <li>{{$asignacion->casco}}</li>
    @endif
        @if ($asignacion->bata)
            <li>{{$asignacion->bata}}</li>
        @endif
        @if ($asignacion->pantalones)
            <li>{{$asignacion->pantalones}}</li>
        @endif
        @if ($asignacion->zapatos)
            <li>{{$asignacion->zapatos}}</li>
        @endif
        @if ($asignacion->guantesmetalicos)
            <li>{{$asignacion->guantesmetalicos}}</li>
        @endif
        @if ($asignacion->camisa)
            <li>{{$asignacion->camisa}}</li>
        @endif
        <br><br>
</ul>
<p>Comprometiendo a entregarlo una vez terminado mi tiempo laboral en la empresa, o reponerlos en caso de perdida o daño extremo
    </p>  <br><br><br><br>
    <strong style="margin-left: 180px">_____________________</strong>
        <br>
        <strong style="margin-left: 220px">{{App\empleado::where('rut',$asignacion->empleado)->value('nombre')}} {{App\empleado::where('rut',$asignacion->empleado)->value('Apellido')}}</strong>
</ul>
</body>
</html>