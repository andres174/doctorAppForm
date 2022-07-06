<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DatosPersonas;

class DatosPersonaController extends Controller
{
    //
    public function mostrarPersonas()
    {
       
      return view('paginas.datos-persona');
    }
}
