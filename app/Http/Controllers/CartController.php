<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function shop()
    {
        $products = Producto::all();
        return view('shop')->with(['products' => $products]);
    }

    public function cart()  {
        $cartCollection = \Cart::getContent();
        if(Auth::user()->type_user == 'cliente')
        {
            return view('cartCliente')->with(['cartCollection' => $cartCollection]);
        }
        else
        {
            return view('cart')->with(['cartCollection' => $cartCollection]);
        }
        
    }
    public function remove(Request $request){
        \Cart::remove($request->id);
        return redirect()->route('cart.index');
    }

    public function add(Request $request){
        \Cart::add(array(
            'id' => $request->id,
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'attributes' => array(
                'image' => $request->img,
                'unidades' => $request->unidades,
            )
        ));
        return redirect()->route('cart.index');
    }

    public function update(Request $request){
        \Cart::update($request->id,
            array(
                'quantity' => array(
                    'relative' => false,
                    'value' => $request->quantity
                ),
        ));
        return redirect()->route('cart.index');
    }

    public function clear(){
        \Cart::clear();
        return redirect()->route('cart.index');
    }

}
