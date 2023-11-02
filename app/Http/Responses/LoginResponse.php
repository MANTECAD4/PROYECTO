<?php
namespace App\Http\Responses;
use Laravel\Fortify\Contracts\LoginResponse as ContractsLoginResponse;
class LoginResponse implements ContractsLoginResponse
{
    public function toResponse($request)
    {
        if (auth()->user()->type_user == 'administrador') {
            return redirect('/inicio');
        }
        else{
            return redirect('/uwu');
        }   
    }
}