<div>
    <h3>Empleados</h3>
    <div class="col-sm-9">
        <input type="text" name="" id="" placeholder="Buscar" class="form-control" wire:model="busqueda">
    </div>
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
                            <a href="{{ route('empleados.edit', $empleado)}}" class="btn btn-primary">Editar</a>
                            <form action="{{ route('empleados.destroy', $empleado)}}" method="POST">
                                @csrf
                                @method('Delete')
                                <button type="submit" class="btn btn-danger">Borrar</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{$empleados->links()}}
</div>
