<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Producto;
use App\Models\ProductoUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
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
            'name' => 'required|unique:productos,name|string|max:255',
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
        Session::flash('success', 'El producto '. $request->name .' ha sido registrado con éxito!');
        ProductoUser::create([
            'operacion' => 'Creación',
            'producto_id' => $producto->id,
            'user_id' => Auth::id(),
        ]);
        return redirect()->route('producto.index');

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
    $this->authorize('update', $producto);
    //dd($request);
    $request->validate([
        'name' => 'required|unique:productos,name,' . $producto->id . ',id|string|max:255',
        'price' => 'required|numeric|min:1',
        'descripcion' => 'nullable|max:164',
        'unidades' => 'required|integer|min:1',
        'marca' => 'required',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048' 
    ]);
    $imageName = null; 
    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $imageName = time() . '_' . $image->getClientOriginalName();
        $image->move(public_path('images'), $imageName);

        if ($producto->image_path) {
            $oldImagePath = public_path('images') . '/' . $producto->image_path;
            if (File::exists($oldImagePath)) {
                File::delete($oldImagePath);
            }
        }

        $producto->update([
            'image_path' => $imageName,
            'name' => $request->name,
            'price' => $request->price,
            'descripcion' => $request->descripcion,
            'unidades' => $request->unidades,
            'marca' => $request->marca,
            'categoria_id' => $request->categoria_id,
        ]);
    } else {
        $producto->update($request->except('_token', '_method', 'image'));
    }

    ProductoUser::create([
        'operacion' => 'Modificación',
        'producto_id' => $producto->id,
        'user_id' => Auth::id(),
    ]);    Session::flash('warning', 'Producto ' . $producto->name . ' modificado con éxito!');
    return redirect()->route('producto.index');
}


    public function log()
    {
        $this->authorize('log', Producto::class);
        $registros = ProductoUser::with('user', 'producto')->orderBy('fecha', 'desc')->get();
        return view('producto/productos_log',compact('registros'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Producto $producto)
    {
        $this->authorize('delete', $producto);
        $nombre = $producto->name;
        ProductoUser::create([
            'operacion' => 'Eliminación',
            'producto_id' => $producto->id,
            'user_id' => Auth::id(),
        ]);
        $producto->delete();
        
        Session::flash('error', 'Producto '. $nombre .' eliminado con éxito!');
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
        ProductoUser::create([
            'operacion' => 'Restauración',
            'producto_id' => $producto->id,
            'user_id' => Auth::id(),
        ]);
        $producto->restore();
        Session::flash('success', 'Producto '. $producto->name .' restaurado con éxito!');
        return redirect('/papelera_producto');
    }
}
