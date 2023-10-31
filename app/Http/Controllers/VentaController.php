<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\ProductoVenta;
use App\Models\Venta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VentaController extends Controller
{
    //
    public function index()
    {
        $ventas = Venta::all();
        return view('venta.indexVentas', compact('ventas'));
    }

    public function store(Request $request){
        $request->merge(['user_id' => Auth::id()]);
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
        return redirect()->route('cart.index');
    }
    public function show(Venta $venta)
    {
        //
        $productos_venta = ProductoVenta::where('venta_id', $venta->id)->get();
        return view('venta/showventa', compact('venta', 'productos_venta'));
    }

}
