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

// Adreces de procediments
Route::get('/gestio/procediments', [ProcedimentController::class, 'gestioProcediments'])->name('gestio.procediments');
Route::get('/gestio/procediment/crear/{faseSlug?}', [ProcedimentController::class, 'formCrearProcediment'])->name('gestio.procediments.crear.formulari');
Route::get('/gestio/xuleta', function() {
    return view('xuleta',['titol' => 'Xuleta']);
});
Route::post('/gestio/procediment/crear/validacio', [ProcedimentController::class, 'crearProcediment'])->name('gestio.procediments.crear');
Route::get('/gestio/procediment/editar/{faseSlug?}', [ProcedimentController::class, 'formModificarProcediment'])->name('gestio.procediments.modificar.formulari');
Route::post('/gestio/procediment/editar', [ProcedimentController::class, 'modificarProcediment'])->name('gestio.procediments.modificar');


// Adreces d'usuari
Route::get('/gestio/acces', [UserController::class, 'loginForm'])->name('login.form');
Route::get('/gestio/sortir', [UserController::class, 'sortir'])->name('sortir');
Route::post('/gestio/validacio', [UserController::class, 'validarLogin'])->name('login.validacio');
Route::get('/gestio', [UserController::class, 'gestio'])->name('gestio');

