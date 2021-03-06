<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Http\Request;

class EmpleadosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('empleados.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('empleados.cerate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   

        $datos = $request->validate([
            'nombre' => 'required',
            'email' => 'required | email',
            'salario' => 'required ',
            'sector' => 'required',

        ]);


        /* Ho podriem fer aixi si els camps es diguessin igual
        $empleado = Empleado::create($datos);
        */

        
        $empleado = new Empleado();

        
        $empleado->name = $request->nombre;
        $empleado->email = $request->email;
        $empleado->salary = $request->salario;
        $empleado->sector = $request->sector;

        $empleado->save();

        return redirect()->route('empleados.index');
        

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $empleado = Empleado::find($id);
        return view('empleados.update')->with('empleado', $empleado);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $empleado = Empleado::find($id);

        $empleado -> name = $request -> nombre;
        $empleado -> email = $request -> email;
        $empleado -> salary = $request -> salario;
        $empleado -> sector = $request -> sector;

        $empleado->save();

        return redirect('/empleados');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $empleado = Empleado::find($id);
        $empleado->delete();
        return redirect()->route('empleados.index');
    }
}
