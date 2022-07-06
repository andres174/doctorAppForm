<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Especialidades;

class Especialidad extends Component
{
    public $especialidad, $id_tipo;
    public $button = true;
    public function render()
    {
        $e=Especialidades::where('estado',1)->get();
        return view('livewire.especialidad', compact('e'));
    }
     
    public function guardar(){
        Especialidades::create([
            'especialidad' => $this->especialidad,
            'estado'=> 1,
        ]);
        $this->reset();
    }

    public function edit($id){
        $especialidad = Especialidades::find($id);
        $this->id_tipo = $id;
        $this->especialidad = $especialidad->especialidad;//mostrar el dato al realizar la busqueda primero ubicamos el nombre del cuadro de texto luego la variable y por ultimo el nombre de la columna
        $this->button = false;
    }

    public function update(){
        $especialidad = Especialidades::find( $this->id_tipo);
        $especialidad->update([
            'especialidad' => $this->especialidad
        ]);
        $this->reset();
    }

    public function destroyL($id){
        
        $especialidad = Especialidades::find($id);
        $especialidad->update([
            'estado' => 0
        ]);
        $this->reset();
    }
}
