<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Producto;
use App\Models\ProductoUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productos = Producto::all();
        return view('producto/indexproducto', compact('productos'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categorias = Categoria::all();
        return view('producto/createProducto', compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric|min:1',
            'descripcion' => 'nullable|max:164',
            'unidades' => 'required|integer|min:1',
            'marca' => 'required',
        ]);

        Producto::create($request->all());

        return redirect('/producto');
    }

    /**
     * Display the specified resource.
     */
    public function show(Producto $producto)
    {
        //
        if(Auth::user()->type_user == 'cliente')
        {
            return view('producto/showProductoCliente', compact('producto'));
        }
        else
        {
            return view('producto/showProducto', compact('producto'));
        }
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Producto $producto)
    {
        //
        $categorias = Categoria::all();
        return view('producto/editProducto', compact('producto', 'categorias'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Producto $producto)
    {
        //
        $request->validate([
            'name' => 'required',
            'descripcion' => 'max:164',
            'price' => 'required|numeric|min:1',
            'unidades' => 'required|integer|min:1',
            'marca' => 'required',
        ]);
        $request->merge(['user_id' => Auth::id()]);
        $producto->usuarios()->attach($request->user_id);

        Producto::where('id', $producto->id)
            ->update($request->except('_token', '_method','user_id'));

        
        return redirect()->route('producto.index');
    }

    public function log()
    {
        $registros = ProductoUser::all();
        return view('producto/productos_log',compact('registros'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Producto $producto)
    {
        //
        $producto->delete();
        return redirect()->route('producto.index');
    }
}
