@extends('layouts.app')

@section('cssImports')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection

@section('content')
    <div class="container">
        <h1 class="titlePag">welcome to home.</h1>
        <a href="/logout">Logout</a>
    </div>
@endsection 