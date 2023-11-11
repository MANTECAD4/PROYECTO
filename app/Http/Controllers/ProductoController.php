<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Producto;
use App\Models\ProductoUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->authorize('viewAny', Producto::class);
        $productos = Producto::with('categoria')->get();

        $productosFiltrados = $productos->reject(function ($producto) {
            return $producto->name === 'producto default';
        });
        return view('producto/indexproducto', compact('productos'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->authorize('create', Producto::class);
        $categorias = Categoria::where('nombre', '!=', 'Varios')->get();
        return view('producto/createProducto', compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->authorize('create', Producto::class);
        
        $request->validate([
            'name' => 'required|unique:productos,name',
            'price' => 'required|numeric|min:1',
            'descripcion' => 'nullable|max:164',
            'unidades' => 'required|integer|min:1',
            'marca' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048' 
        ]);

        $imageName = null; 

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('images'), $imageName);
        }

        $producto = Producto::create([
            'name' => $request->name,
            'price' => $request->price,
            'descripcion' => $request->descripcion,
            'unidades' => $request->unidades,
            'marca' => $request->marca,
            'categoria_id' => $request->categoria_id,
            'image_path' => $imageName 
        ]);

        return redirect('/producto');
    }


    /**
     * Display the specified resource.
     */
    public function show(Producto $producto)
    {
        //
        $this->authorize('view', $producto);
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
        $this->authorize('update', $producto);
        $categorias = Categoria::where('nombre', '!=', 'Varios')->get();
        return view('producto/editProducto', compact('producto', 'categorias'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Producto $producto)
    {
        //
        $this->authorize('update', $producto);
        $request->validate([
            'name' => 'required|unique:productos,name,'. $producto->id . ',id',
            'descripcion' => 'max:164',
            'price' => 'required|numeric|min:1',
            'unidades' => 'required|integer|min:1',
            'marca' => 'required',
        ]);

        // REHACER LOGS
        //$request->merge(['user_id' => Auth::id()]);
        //$producto->usuarios()->attach($request->user_id);

        Producto::where('id', $producto->id)
            ->update($request->except('_token', '_method','user_id'));
        
        return redirect()->route('producto.index');
    }

    public function log()
    {
        $this->authorize('log', Producto::class);
        $registros = ProductoUser::with('user', 'producto')->get();
        return view('producto/productos_log',compact('registros'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Producto $producto)
    {
        $this->authorize('delete', $producto);
        $producto->delete();
        return redirect()->route('producto.index');
    }

    public function papelera()
    {
        $this->authorize('restore', Producto::class);
        $productos_borrados = Producto::onlyTrashed()->get();
        
        return view('producto/papeleraproducto', compact('productos_borrados'));
    }

    public function restore($id)
    {
        $this->authorize('restore', Producto::class);
        $producto = Producto::onlyTrashed()->find($id);
        $producto->restore();
        Session::flash('success', 'Producto '. $producto->name .' restaurado con éxito!');
        return redirect('/papelera_producto');
    }
}
