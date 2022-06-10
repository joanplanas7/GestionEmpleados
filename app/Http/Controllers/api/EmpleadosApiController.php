<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Empleado;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Resource_;

class EmpleadosApiController extends Controller
{
    public function getEmpleados(){
        $empleados = Empleado::all();
        return $empleados;
    }

    public function addEmpleado(Request $request){
        $empleado = new Empleado();

        $empleado->name = $request->nombre;
        $empleado->email = $request->email;
        $empleado->salary = $request->salario;
        $empleado->sector = $request->sector;

        $empleado->save();

        return response()->json([
            'message' => "Empelado creado"
        ]);
    }
}
