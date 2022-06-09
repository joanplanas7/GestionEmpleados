@extends('layouts.navbar')


@section('pages')
    <div class="container">
        <form action="{{route('empleados.store')}}" method="POST">
            @csrf
            <div class="row">
                <div class="col-sm-12">
                    <label for="InputNombre" class="form-label">Nombre:</label>
                    <input type="text" name="nombre" id="InputNombre" class="form-control">
                </div>
                <div class="col-sm-12">
                    <label for="InputEmail" class="form-label">Email:</label>
                    <input type="text" name="email" id="InputEmail" class="form-control">
                </div>
                <div class="col-sm-12">
                    <label for="InputSalario" class="form-label">Salario: </label>
                    <input type="number" name="salario" id="InputSalario" class="form-control">
                </div>
                <div class="col-sm-12">
                    <label for="InputSector" class="form-label">Sector: </label>
                    <input type="text" name="sector" id="InputSector" class="form-control">
                </div>

                <div class="col-sm-12 my-2">
                    <button type="submit" class="btn btn-primary ">Guardar</button>
                    <a href="/empleados" class="btn btn-secondary">Volver</a>
                </div>

                @error('nombre')
                    <div class="alert alert-danger">
                        <ul>
                            <li>{{$message}}</li>
                        </ul>
                    </div>
                @enderror
                
            </div>
        </form>
    </div>
@endsection 