<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>

        <nav class="navbar navbar-expand-lg navbar-dark bg-success">


                <div class="collapse navbar-collapse bg-success" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="{{route('homeadmin')}}" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Empleado
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{route('crearEmpleado')}}">Agregar Empleado</a>
                                <a class="dropdown-item" href="{{route('mostrarEmpleado')}}">Ver Empleados</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Buscar por Rut</a>
                                <a class="dropdown-item" href="#">Buscar por Sucursal</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Opciones
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{route('crearafp')}}">Agregar AFP</a>
                                <a class="dropdown-item" href="{{route('mostrarAfp')}}">Ver AFP</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{route('crearSalud')}}">Agregar Salud</a>
                                <a class="dropdown-item" href="{{route('mostrarSalud')}}">Modificar Salud</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{route('crearCargo')}}">Agregar Cargo</a>
                                <a class="dropdown-item" href="{{route('mostrarCargo')}}">Ver Cargos</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{route('crearRazon')}}">Agregar Razon Social</a>
                                <a class="dropdown-item" href="{{route('mostrarRazon')}}">Ver Razon Social</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{route('crearSucursal')}}">Agregar Sucursal</a>
                                <a class="dropdown-item" href="{{route('mostrarSucursal')}}">Ver Sucursal</a>
                            </div>
                        </li>

                    </ul>
                    <form class="form-inline my-2 my-lg-0" action="{{route('editRazon')}}" method="get">
                        <input name="rut" class="form-control mr-sm-2" type="search" placeholder="Rut" aria-label="Search">
                        <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Buscar</button>
                    </form>
                </div>
            </nav>
            @yield('content')


</body>
</html>
