<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Especialidades;
use Livewire\WithPagination;

class Especialidad extends Component
{
    use WithPagination;

    public $especialidad, $id_tipo;
    public $button = true;

    protected $paginationTheme = 'bootstrap';

    protected $rules = [
        'especialidad' => 'required',
    ];

    protected $messages = [
        'especialidad.required' => 'Campo requerido.'
    ];

    public $search;
 
    protected $queryString = ['search'];

    public function render()
    {
        $e=Especialidades::where('especialidad', 'like', '%'.$this->search.'%')->paginate(5);
        //$e=Especialidades::where('estado',1)->get();
        return view('livewire.especialidad', compact('e'));
    }
     
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }


    public function guardar(){
        $this->validate();
        Especialidades::create([
            'especialidad' => $this->especialidad,
            'estado'=> 1,
        ]);
        $this->reset();
        session()->flash('message', 'Guardado correctamente');
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
        session()->flash('message', 'Actualizado correctamente');
    }

    public function destroyL($id){
        
        $especialidad = Especialidades::find($id);
        $especialidad->update([
            'estado' => 0
        ]);
        $this->reset();
    }
}
