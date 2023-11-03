<?php

namespace App\View\Components;

use App\Models\Cliente;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\Component;

class ClienteNavBar extends Component
{
    public $usuario;
    public $cliente;  

    public function __construct()
    {

        $this->usuario = Auth::id();
        $this->cliente = Cliente::where('user_id', $this->usuario)->first();

    }

    public function render(): View|Closure|string
    {

        return view('components.cliente-nav-bar');
    }
}
