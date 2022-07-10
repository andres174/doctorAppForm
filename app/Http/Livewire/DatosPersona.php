<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\TipoUsuarios;
use App\Models\Especialidades;
use App\Models\DatosPersonas;

use Livewire\WithPagination;

class DatosPersona extends Component
{
    public $persona, $_id;
    public $nombre, $apellido, $cedula, $direccion, $celular, $id_tipo, $id_especialidad;
    public $button = true;

    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    protected $rules = [
        'nombre' => 'required',
        'apellido' => 'required',
        'cedula' => 'required|min:10|max:10|numeric',
        'celular' => 'required|min:10|max:10|numeric',
        'direccion' => 'required',
        'id_tipo' => 'required',
        'id_especialidad' => 'required',
    ];

    protected $messages = [
        'nombre.required' => 'Campo requerido.',
        'apellido.required' => 'Campo requerido.',
        'cedula.required' => 'Campo requerido.',
        'cedula.min' => 'Mínimo 10 caracteres.',
        'cedula.max' => 'Máximo 10 caracteres.',
        'cedula.numeric' => 'Sólo se permiten numeros.',
        'celular.required' => 'Campo requerido.',
        'celular.min' => 'Mínimo 10 caracteres.',
        'celular.max' => 'Máximo 10 caracteres.',
        'celular.numeric' => 'Sólo se permiten numeros.',
        'direccion.required' => 'Campo requerido.',
        'id_tipo.required' => 'Campo requerido.',
        'id_especialidad.required' => 'Campo requerido.',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public $search;
 
    protected $queryString = ['search'];

    public function render()
    {
        $e = Especialidades::where('estado',1)->get();
        $t = TipoUsuarios::where('estado',1)->get();
        $p = DatosPersonas::where( 'cedula', 'like', '%'.$this->search.'%')->paginate(5);
        return view('livewire.datos-persona ', compact('p','t','e'));
    }
     
    public function guardar(){
        $this->validate();
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
        session()->flash('message', 'Guardado correctamente');
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
        session()->flash('message', 'Actualizado correctamente');
    }

    public function destroyL($id){
        
        $persona = DatosPersonas::find($id);
        $persona->update([
            'estado' => 0
        ]);
        $this->reset();
    }
}
