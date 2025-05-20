<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Providers\AgeRouteService;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index');
    }

    public function authenticate(Request $request)  // Debe llamarse authenticate según tu ruta
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            $user = Auth::user();

            // Redirigir según la edad usando el servicio
            return AgeRouteService::redirectByAge($user->edad);
        }

        return back()->with('error', 'Correo o contraseña incorrectos');
    }
}
