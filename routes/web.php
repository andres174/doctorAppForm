<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TipoUsuariosController;
use App\Http\Controllers\EspecialidadesController;
use App\Http\Controllers\DatosPersonaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('tipo-usuario', [TipoUsuariosController::class, 'mostrarTipos']);

Route::get('especialidad', [EspecialidadesController::class, 'mostrarEspecialidades']);

Route::get('datos-persona', [DatosPersonaController::class, 'mostrarPersonas']);


