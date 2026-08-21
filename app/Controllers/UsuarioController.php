<?php

namespace App\Controllers;

class UsuarioController extends BaseController
{
    public function index()
    {
        helper('url');

        return view('usuarios/index');
    }

     public function crear()
    {
        helper(['url', 'form']);

        return view('usuarios/crear');
    }
}