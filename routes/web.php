<?php

use App\Http\Controllers\AmbienteController;
use App\Http\Controllers\ArchivoController;
use App\Http\Controllers\CentroController;
use App\Http\Controllers\CompetenciaController;
use App\Http\Controllers\RedesController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProgramaController;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\EventoController;
use App\Http\Controllers\FichaController;
use App\Http\Controllers\InstructoresController;
use App\Http\Controllers\ResultadoAprendizajeController;
use App\Http\Controllers\VigenciaController;
use App\Models\TblPrograma;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/vuelo', function () {
   return view('vuelo');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

// Route::get('/home', function() {
//     return view('home');
// })->name('home')->middleware('auth');
