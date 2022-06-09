@extends('layouts.app')

@section('cssImports')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection

@section('content')
<nav class="navbar navbar-dark bg-primary navbar-expand-lg">
        <div class="container-fluid">
            <div class="collapse navbar-collapse flex-row-reverse" id="navbarSupportedContent">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/empleados">Gestion Empleados</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./logout">LogOut</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    @yield('pages')
@endsection 