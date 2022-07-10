<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\TipoUsuarios;

use Livewire\WithPagination;

class TipoUsuario extends Component
{
    public $tipos, $id_tipo;
    public $button = true;

    
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    

    protected $rules = [
        'tipos' => 'required|min:6',
    ];

    protected $messages = [
        'tipos.required' => 'Campo requerido.',
        'tipos.min' => 'Mínimo 6 caracteres.',
    ];

    public $search;
 
    protected $queryString = ['search'];


    public function render()
    {
        //$t = TipoUsuarios::all();
        $t = TipoUsuarios::where('tipo_usuario', 'like', '%'.$this->search.'%')->paginate(5);
        //$t = TipoUsuarios::where('estado', 1)->get();

        return view('livewire.tipo-usuario', compact('t'));
    }
     
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function guardar(){
        $this->validate();
        TipoUsuarios::create([
        'tipo_usuario' => $this->tipos,
        'estado'=> 1
        ]);
        $this->reset();
        session()->flash('message', 'Guardado correctamente');
    }

    public function edit($id){
        $tipos= TipoUsuarios::find($id);
        $this->id_tipo = $id;
        $this->tipos=$tipos->tipo_usuario;//mostrar el dato al realizar la busqueda primero ubicamos el nombre del cuadro de texto luego la variable y por ultimo el nombre de la columna
        $this->button = false;
    }

    public function update(){
        $this->validate();
        $tipos = TipoUsuarios::find( $this->id_tipo);
        $tipos->update([
            'tipo_usuario' => $this->tipos
        ]);
        $this->reset();
        session()->flash('message', 'Actualizado correctamente');
    }

    public function destroyL($id){
        
        $tipos = TipoUsuarios::find($id);
        $tipos->update([
            'estado' => 0
        ]);
        $this->reset();
    }
}
