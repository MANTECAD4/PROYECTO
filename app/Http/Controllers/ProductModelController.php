<?php

namespace App\Http\Controllers;

use App\Models\ProductModel;
use Illuminate\Http\Request;
/*Hacer que el fomulario (create) almacene la informacion y aplique direccionamiento entre store y la vista */
class ProductModelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('producto/indexProducto');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Producto/createProducto');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Aqui se guarda el producto en la base de datos
        $request->validate([
            'nombre' => 'required|min:10',
            'precio' => 'required|decimal|min:0.01',
            'cantidad' => 'required|integer|min:1',
            'categoria' => 'required'
        ]);
        
        $producto = new Producto();
        $producto->nombre = $request->nombre;
        $producto->descripcion = $request->descpricion;
        $producto->precio = $request->precio;
        $producto->cantidad = $request->cantidad;
        $producto->categoria = $request->categoria;
        
        #Este metodo guarda el objeto en la base de datos
        $producto->save();
        #salimos para evitar enviar los datos del formualrio dos veces
        return redirect('Producto/indexProducto');
    }

    /**
     * Display the specified resource.
     */
    public function show(ProductModel $productModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProductModel $productModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ProductModel $productModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProductModel $productModel)
    {
        //
    }
}
