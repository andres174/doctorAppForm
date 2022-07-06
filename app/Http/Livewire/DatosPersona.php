<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\TipoUsuarios;
use App\Models\Especialidades;
use App\Models\DatosPersonas;

class DatosPersona extends Component
{
    public $persona, $_id;
    public $nombre, $apellido, $cedula, $direccion, $celular, $id_tipo, $id_especialidad;
    public $button = true;

    public function render()
    {
        $e = Especialidades::where('estado',1)->get();
        $t = TipoUsuarios::where('estado',1)->get();
        $p = DatosPersonas::where('estado',1)->get();
        return view('livewire.datos-persona ', compact('p','t','e'));
    }
     
    public function guardar(){
        DatosPersonas::create([
            'nombre' => $this->nombre,
            'apellido' => $this->apellido,
            'cedula' => $this->cedula,
            'direccion' => $this->direccion,
            'celular' => $this->celular,
            'estado' => 1,
            'id_tipo' => $this->id_tipo,
            'id_especialidad' => $this->id_especialidad,
            
        ]);
        $this->reset();
    }

    public function edit($id){
        $persona = DatosPersonas::find($id);
        $this->_id = $id;
        $this->nombre=$persona->nombre;
        $this->apellido=$persona->apellido;
        $this->cedula=$persona->cedula;
        $this->direccion=$persona->direccion;
        $this->celular=$persona->celular;
        $this->id_tipo=$persona->id_tipo;
        $this->id_especialidad=$persona->id_especialidad;

        $this->button = false;
    }

    public function update(){
        $persona = DatosPersonas::find( $this->_id);
        $persona->update([
            'nombre' => $this->nombre,
            'apellido' => $this->apellido,
            'cedula' => $this->cedula,
            'direccion' => $this->direccion,
            'celular' => $this->celular ,
            'estado' => 1,
            'id_tipo' => $this->id_tipo,
            'id_especialidad' => $this->id_especialidad,
        ]);
        $this->reset();
    }

    public function destroyL($id){
        
        $persona = DatosPersonas::find($id);
        $persona->update([
            'estado' => 0
        ]);
        $this->reset();
    }
}
