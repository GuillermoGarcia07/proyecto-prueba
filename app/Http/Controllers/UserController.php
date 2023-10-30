<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * endPoint para el lgin.
     */
    public function loginUser(Request $request)
    {
        $credenciales = $request->only('email', 'password');
        
        if(Auth::attempt($credenciales)){
            $request->session()->regenerate();
            return redirect('inicio');
        }

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
