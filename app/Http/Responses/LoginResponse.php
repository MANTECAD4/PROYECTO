<?php
namespace App\Http\Responses;
use Laravel\Fortify\Contracts\LoginResponse as ContractsLoginResponse;
class LoginResponse implements ContractsLoginResponse
{
    public function toResponse($request)
    {
        if (auth()->user()->type_user == 'administrador' or auth()->user()->type_user == 'vendedor') {
            return redirect('/inicio');
        }
        else if (auth()->user()->type_user == 'cliente'){
            return redirect()->route('cliente.index');
        }   
    }
}