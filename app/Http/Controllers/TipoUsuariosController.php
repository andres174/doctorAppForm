<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TipoUsuarios;

class TipoUsuariosController extends Controller
{
    //
    public function mostrarTipos()
    {
       
       return view('paginas.tipo');
    }
}
