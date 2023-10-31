<?php

namespace App\Http\Controllers;

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

    public function checkout(Request $request){
        $request->merge(['user_id' => Auth::id()]);
        Venta::create($request->all());
        \Cart::clear();
        return redirect()->route('cart.index');
    }

}
