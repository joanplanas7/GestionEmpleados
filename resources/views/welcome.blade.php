@extends('layouts.app')

@section('cssImports')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection

@section('content')
    
    <nav class="navbar navbar-dark bg-primary navbar-expand-lg">
        <div class="container-fluid">
            <div class="logo">

            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-2">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./login">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./register">Register</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <h1 class="titlePag">Login or registery</h1>
    </div>
@endsection 