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

// Rutes amb fases
Route::get('/', [FaseController::class, 'landing'])->name('inici');
Route::get('/fase', [FaseController::class, 'fase'])->name('fase');
Route::get('/fase/{slug?}', [FaseController::class, 'printFase']);

// Rutes d'usuari
Route::get('/gestio/acces', [UserController::class, 'loginForm'])->name('login.form');
Route::get('/gestio/sortir', [UserController::class, 'sortir'])->name('sortir');
Route::post('/gestio/validacio', [UserController::class, 'validarLogin'])->name('login.validacio');
Route::get('/gestio', [UserController::class, 'gestio'])->name('gestio');

