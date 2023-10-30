<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * endPoint para el proceso del login.
     */
    public function loginUser(Request $request)
    {
        //recibe los datos del formulario.
        $credenciales = $request->only('email', 'password');
        
        //valida los datos del formulario y hace el logeo, despues redirige si es exitoso.
        if(Auth::attempt($credenciales)){
            $request->session()->regenerate();
            return redirect('inicio');
        }

        //si las credenciales son incorrectas que rediriga al formulario de login.
        return redirect('/');
    }
    
    /**
     * endPoint para cerrar sesion.
     */
    public function logout()
    {
        Auth::logout();
        return redirect('login');
    }
}
