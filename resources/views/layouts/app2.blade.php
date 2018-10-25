<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Supermercado el 9') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/home') }}" style="margin-left: 100px;">
                <img src="img/logo.png" alt="" class="w-75">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        <li class="nav-item">
                            @if (Route::has('register'))
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            @endif
                        </li>
                    @else
                        <nav class="navbar navbar-expand">


                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav mr-auto">


                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="{{route('home')}}" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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

                                    <li class="nav-item active">
                                        <a href="{{ url('/logout') }} "
                                           onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();" class="nav-link">
                                            Salir <span class="glyphicon glyphicon-envelope"></span>
                                        </a>
                                        <form id="logout-form"
                                              action="{{ url('/logout') }}"
                                              method="POST"
                                              style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                                <form class="form-inline my-2 my-lg-0" action="{{route('editRazon')}}" method="get">
                                    <input name="rut" class="form-control mr-sm-2" type="search" placeholder="Rut" aria-label="Search">
                                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
                                </form>
                            </div>
                        </nav>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    <main class="py-4">
        @yield('content')
    </main>
</div>
</body>
</html>
