<?php

namespace App\Controllers;

class LoginController extends BaseController
{
    public function index()
    {
        helper('url');

        return view('auth/login');
    }

    public function recuperar()
    {
        helper('url');

        return view('auth/recuperar');
    }

    public function cerrarSesionTemporal()
    {
        return redirect()
        ->to('/login')
        ->with(
            'mensaje',
            'Has cerrado sesión correctamente.'
        );
    }
}