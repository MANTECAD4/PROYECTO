<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $empleados = Empleado::all();
        return view('empleado/indexEmpleado', compact('empleados'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('empleado/createEmpleado');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $errores = $request->validate([
            'nombre' => 'required|string|max:255',
            'telefono' => 'nullable|string|max:20',
            'correo' => 'required|email|max:255|unique:users,email',
            'sueldo' => 'numeric|min:1',
            'fecha_nac' => 'required|date',
            'direccion' => 'required|string|max:255',
            'password' => 'required|min:8',
            'password2' => 'required|same:password',
        ]);
        try
        {
            DB::beginTransaction();
            $usuario = User::create(['name' => $request->nombre,'email' => $request->correo,'password' => Hash::make($request->password),'type_user' => 'vendedor']);
            $request->merge(['user_id' => $usuario->id]); 
            Empleado::create($request->except(['nombre', 'correo', 'password', 'password2','_token', '_method']));
            
            DB::commit(); 
            return redirect()->route('empleado.index'); 
        } 
        catch (\Exception $e) 
        {
            DB::rollBack(); 
            return redirect()->route('empleado.create')->withErrors($errores)->withInput();
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(Empleado $empleado)
    {
        return view('empleado/showEmpleado', compact('empleado'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Empleado $empleado)
    {
        //
        return view('empleado/editEmpleado', compact('empleado'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Empleado $empleado)
    {
        $errores = $request->validate([
            'nombre' => 'required|string|max:255',
            'telefono' => 'nullable|string|max:20',
            'correo' => 'required|email|max:255|unique:users,email,' . $empleado->user_id,
            'sueldo' => 'numeric|min:1',
            'fecha_nac' => 'required|date',
            'direccion' => 'required|string|max:255',
            'password' => 'nullable|min:8',
            'password2' => 'same:password',
        ]);
        try
        {
            DB::beginTransaction();
            $user = User::find($empleado->user_id);
            $user->name = $request->nombre;
            $user->email = $request->correo;
            if ($request->filled('password')) 
            {
                $user->password = Hash::make($request->password);
            }            
            $user->save();
    
            $empleado->telefono = $request->telefono;
            $empleado->sueldo = $request->sueldo;
            $empleado->fecha_nac = $request->fecha_nac;
            $empleado->genero = $request->genero;
            $empleado->direccion = $request->direccion;
            $empleado->save();
            DB::commit(); 
            return redirect()->route('empleado.index'); 
        } 
        catch (\Exception $e) 
        {
            DB::rollBack(); 
            return redirect()->route('empleado.edit')->withErrors($errores)->withInput();
        }
        return redirect()->route('empleado.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Empleado $empleado)
    {
        $empleado->delete();
        return redirect()->route('empleado.index');
    }
}
