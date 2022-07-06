<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DatosPersonas extends Model
{
    use HasFactory;
    protected $table= 'datos_persona';
    public $timestamps = false;
    public $fillable = [
        'nombre',
        'apellido',
        'cedula',
        'direccion',
        'celular',
        'estado',
        'id_tipo',
        'id_especialidad'
    ];
}
