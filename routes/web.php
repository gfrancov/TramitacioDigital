<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FaseController;
use App\Http\Controllers\ProcedimentController;
use App\Http\Controllers\UserController;

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

// Adreces de fases
Route::get('/', [FaseController::class, 'landing'])->name('inici');
Route::get('/fase', [FaseController::class, 'fase'])->name('fase');
Route::get('/fase/{slug?}', [FaseController::class, 'printFase']);
Route::get('/gestio/fases', [FaseController::class, 'gestioFases'])->name('gestio.fases');
Route::get('/gestio/fase/editar/{slug}', [FaseController::class, 'formModificarFase'])->name('gestio.fase.formulari.modificar');
Route::post('/gestio/fase/editar', [FaseController::class, 'modificarFase'])->name('gestio.fase.modificar');
Route::get('/gestio/fase/eliminar/{slug?}', [FaseController::class, 'formEliminarFase'])->name('gestio.fase.eliminar.formulari');
Route::post('/gestio/fase/eliminar', [FaseController::class, 'eliminarFase'])->name('gestio.fase.eliminar');
Route::get('/gestio/fase/crear', [FaseController::class, 'formCrearFase'])->name('gestio.fase.crear.formulari');
Route::post('/gestio/fase/crear/validacio', [FaseController::class, 'crearFase'])->name('gestio.fase.crear');

// Adreces de procediments
Route::get('/gestio/procediments', [ProcedimentController::class, 'gestioProcediments'])->name('gestio.procediments');
Route::get('/gestio/procediment/crear/{faseSlug?}', [ProcedimentController::class, 'formCrearProcediment'])->name('gestio.procediments.crear.formulari');
Route::get('/gestio/xuleta', function() {
    return view('xuleta',['titol' => 'Xuleta']);
});
Route::post('/gestio/procediment/crear/validacio', [ProcedimentController::class, 'crearProcediment'])->name('gestio.procediments.crear');
Route::get('/gestio/procediment/editar/{procedimentSlug?}', [ProcedimentController::class, 'formModificarProcediment'])->name('gestio.procediments.modificar.formulari');
Route::post('/gestio/procediment/editar', [ProcedimentController::class, 'modificarProcediment'])->name('gestio.procediments.modificar');
Route::get('/gestio/procediment/eliminar/{procedimentSlug?}', [ProcedimentController::class, 'formEliminarProcediment'])->name('gestio.procediments.eliminar.formulari');
Route::post('/gestio/procediment/eliminar', [ProcedimentController::class, 'eliminarProcediment'])->name('gestio.procediments.eliminar');


// Adreces d'usuari
Route::get('/gestio/acces', [UserController::class, 'loginForm'])->name('login.form');
Route::get('/gestio/sortir', [UserController::class, 'sortir'])->name('sortir');
Route::post('/gestio/validacio', [UserController::class, 'validarLogin'])->name('login.validacio');
Route::get('/gestio', [UserController::class, 'gestio'])->name('gestio');
Route::get('/gestio/usuaris', [UserController::class, 'llistat'])->name('gestio.usuaris.llistat');
Route::get('/gestio/usuari/crear', [UserController::class, 'formCrearUsuari'])->name('gestio.usuaris.crear.formulari');
Route::post('/gestio/usuari/crear/validacio', [UserController::class, 'crearUsuari'])->name('gestio.usuaris.crear');
Route::get('/gestio/usuari/editar/{id}', [UserController::class, 'formModificarUsuari'])->name('gestio.usuaris.modificar.formulari');
Route::post('/gestio/usuari/editar', [UserController::class, 'modificarUsuari'])->name('gestio.usuaris.modificar');
Route::get('/gestio/usuari/eliminar/{id}', [UserController::class, 'formEliminarUsuari'])->name('gestio.usuaris.eliminar.formulari');
Route::post('/gestio/usuari/eliminar', [UserController::class, 'eliminarUsuari'])->name('gestio.usuaris.eliminar');
