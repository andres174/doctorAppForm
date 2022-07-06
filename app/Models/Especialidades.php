<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Especialidades extends Model
{
    use HasFactory;
    protected $table = 'especialidades';
    public $timestamps = false;
    public $fillable = [
        'especialidad',
        'estado'
    ];
}
