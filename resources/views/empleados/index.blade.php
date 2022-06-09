@extends('layouts.navbar')


@section('pages')
    <div class="container shadow bg-white">
        <div class="row">
            <div class="col-sm-12">
                <h1>Gestion Empleados</h1>
            </div>
            <div class="col-sm-12">
                <a href="{{ route('empleados.create') }}" class="btn btn-link">Añadir empleado</a>
            </div>
        </div>

        <div class="row">
            <h3>Empleados</h3>
            <table class="table table-stripped table-hover">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Salario</th>
                        <th>Sector</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($empleados as $empleado)
                    <tr>
                        <td>{{$empleado -> name}}</td>
                        <td>{{$empleado -> email}}</td>
                        <td>{{$empleado -> salary}}</td>
                        <td>{{$empleado -> sector}}</td>
                        <td> 
                            <a href="" class="btn btn-primary">Editar</a>
                            <a href="" class="btn btn-danger">Eliminat</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection 
