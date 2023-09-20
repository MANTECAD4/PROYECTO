<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Empleado/indexEmpleado');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Empleado/createEmpleado');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Almacenando al empleado en la BD
        $request->validate([
            'nombre' => 'required|min:10',
            'correo_electronico' => 'required|email',
            'telefono' => 'required',
            'direccion' => 'required',
            'fecha_contratacion' => 'required|date',
            'salario' => 'required|numeric|min:0.01',
            'cargo' => 'required',
            'departamento' => 'required',
        ]);
    
        $empleado = new Empleado();
        $empleado->nombre = $request->nombre;
        $empleado->correo_electronico = $request->correo_electronico;
        $empleado->telefono = $request->telefono;
        $empleado->direccion = $request->direccion;
        $empleado->fecha_contratacion = $request->fecha_contratacion;
        $empleado->salario = $request->salario;
        $empleado->cargo = $request->cargo;
        $empleado->departamento = $request->departamento;
    
        $empleado->save();

        return redirect()->route('empleado.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Empleado $empleado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Empleado $empleado)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Empleado $empleado)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Empleado $empleado)
    {
        //
    }
}
