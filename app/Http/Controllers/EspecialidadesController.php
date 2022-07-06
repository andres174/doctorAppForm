<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Especialidades;

class EspecialidadesController extends Controller
{
    //
    public function mostrarEspecialidades()
    {
       
      return view('paginas.especialidad');
    }
}
