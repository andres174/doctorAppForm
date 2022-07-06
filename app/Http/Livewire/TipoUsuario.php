<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\TipoUsuarios;

class TipoUsuario extends Component
{
    public $tipos, $id_tipo;
    public $button = true;
    public function render()
    {
        $t = TipoUsuarios::all();
        //$t = TipoUsuarios::where('estado', 1)->get();
        return view('livewire.tipo-usuario', compact('t'));
    }
     
    public function guardar(){
        TipoUsuarios::create([
        'tipo_usuario' => $this->tipos,
        'estado'=> 1
        ]);
        $this->reset();
    }

    public function edit($id){
        $tipos= TipoUsuarios::find($id);
        $this->id_tipo = $id;
        $this->tipos=$tipos->tipo_usuario;//mostrar el dato al realizar la busqueda primero ubicamos el nombre del cuadro de texto luego la variable y por ultimo el nombre de la columna
        $this->button = false;
    }

    public function update(){
        $tipos = TipoUsuarios::find( $this->id_tipo);
        $tipos->update([
            'tipo_usuario' => $this->tipos
        ]);
        $this->reset();
    }

    public function destroyL($id){
        
        $tipos = TipoUsuarios::find($id);
        $tipos->update([
            'estado' => 0
        ]);
        $this->reset();
    }
}
