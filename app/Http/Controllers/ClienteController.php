<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Cliente;
use App\Models\Producto;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class ClienteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['create', 'store']);
        
    }

    public function index()
    {
        $this->authorize('viewAny', Cliente::class);
        $clientes = Cliente::with('user')->withTrashed()->get()->reject(function ($cliente) {
            return $cliente->user->name === 'Cliente Default';
        });
        
        return view('cliente/indexCliente', compact('clientes')); 
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->authorize('create', Cliente::class);
        return view('cliente/createCliente');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->authorize('create', Cliente::class);
        $errors = $request->validate([
            'nombre' => 'required|string|max:255',
            'telefono' => 'nullable|string|max:20',
            'correo' => 'required|email|max:255|unique:users,email',
            'fecha_nac' => 'required|date|before:' . now()->subYears(18)->format('Y-m-d'),
            'direccion' => 'required|string|max:255',
            'password' => 'required|min:8',
            'password2' => 'required|same:password',
        ]);
        try
        {
            DB::beginTransaction();
            $usuario = User::create(['name' => $request->nombre,'email' => $request->correo,'password' => Hash::make($request->password),'type_user' => 'cliente']);
            $request->merge(['user_id' => $usuario->id]); 
            Cliente::create($request->except(['nombre', 'correo', 'password', 'password2','_token', '_method']));
            
            DB::commit();
            
            Auth::login($usuario);
            if (Auth::check()) {
                return redirect('/shop'); 
            }
        } 
        catch (\Exception $e) 
        {
            DB::rollBack(); 
            return redirect()->route('cliente.create')->withErrors($errors)->withInput();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Cliente $cliente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cliente $cliente)
    {
        $this->authorize('update', $cliente);
        return view('cliente/editCliente', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cliente $cliente)
    {
        $this->authorize('update', $cliente);
        $errors = $request->validate([
            'nombre' => 'required|string|max:255',
            'telefono' => 'nullable|string|max:20',
            'correo' => 'required|email|max:255|unique:users,email,' . $cliente->user_id,
            'fecha_nac' => 'required|date|before:' . now()->subYears(18)->format('Y-m-d'),
            'direccion' => 'required|string|max:255',
            'password' => 'nullable|min:8',
            'password2' => 'same:password',
        ]);
        try
        {
            DB::beginTransaction();
            $user = User::find($cliente->user_id);
            $user->name = $request->nombre;
            $user->email = $request->correo;
            if ($request->filled('password')) 
            {
                $user->password = Hash::make($request->password);
            }            
            $user->save();
    
            $cliente->telefono = $request->telefono;
            $cliente->fecha_nac = $request->fecha_nac;
            $cliente->genero = $request->genero;
            $cliente->direccion = $request->direccion;
            $cliente->save();
            DB::commit(); 
            Session::flash('success', 'Tu cuenta ha sido modificada :)');
            return redirect('/shop'); 
        } 
        catch (\Exception $e) 
        {
            DB::rollBack(); 
            return redirect()->route('cliente.edit')->withErrors($errors)->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cliente $cliente)
    {
        $this->authorize('delete', $cliente);
        $usuario = $cliente->user;
        $cliente->delete();
        $usuario->delete();
        Auth::logout();
        return redirect('/');

    }
    public function restore($id)
    {
        $this->authorize('restore', Cliente::class);
        $cliente = Cliente::onlyTrashed()->find($id);
        $cliente->restore();
        $usuario = $cliente->user;
        $usuario->restore();
        Session::flash('success', 'Cliente '. $usuario->name .' restaurado con éxito!');
        return redirect()->route('cliente.index');
    }
}
