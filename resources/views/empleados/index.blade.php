@extends('layouts.navbar')


@section('pages')
    <div class="container shadow bg-white">
        <div class="row  my-4">
            <div class="col-sm-12">
                <h1>Gestion Empleados</h1>
            </div>
            <div class="col-sm-12">
                <a href="{{ route('empleados.create') }}" class="btn btn-primary">Añadir empleado</a>
            </div>
        </div>

        <div class="row my-4">
           @livewire('empleado-index')
        </div>
    </div>
@endsection 
