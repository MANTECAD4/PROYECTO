<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\ProductoVenta;
use App\Models\User;
use App\Models\Venta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class VentaController extends Controller
{
    //
    public function index()
    {
        $this->authorize('viewAny', Venta::class);
        $ventas = Venta::with('empleado','cliente')->orderBy('id', 'desc')->get();
        return view('venta.indexVentas', compact('ventas'));
    }

    public function store(Request $request)
    {
        $this->authorize('create', Venta::class);
        if(auth()->user()->type_user == 'cliente')
        {
            $vendedor = User::where('name', 'Vendedor Default')->first();
            $request->merge(['cliente_id' => Auth::id(), 'empleado_id' => $vendedor->id]);
           
        }
        else
        {
            $cliente = User::where('name', 'Cliente Default')->first();
            $request->merge(['empleado_id' => Auth::id(), 'cliente_id' => $cliente->id]);
        }
        $venta = Venta::create($request->all());
        $cartCollection = \Cart::getContent();
        foreach ($cartCollection as $item) {
            $producto = Producto::find($item->id);
            $nuevaCantidad = $producto->unidades-$item->quantity;
            Producto::where('id', $producto->id)->update(['unidades' => $nuevaCantidad]);
            ProductoVenta::create([
                'producto_id' => $item->id,
                'venta_id' => $venta->id,    
                'subtotal' => \Cart::get($item->id)->getPriceSum(),
                'cantidad' => $item->quantity
            ]);
        } 
        \Cart::clear();
        Session::flash('success', 'La venta se ha realizado exitosamente!');
        return redirect()->route('cart.index');
    }
    public function show(Venta $venta)
    {
        $this->authorize('view', $venta);
        $productos_venta = $venta->productos;
        return view('venta/showventa', compact('venta', 'productos_venta'));
    }

}
