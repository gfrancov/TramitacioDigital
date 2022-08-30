<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Procediment;
use App\Http\Controllers\FaseController;
use App\Http\Controllers\UserController;


class ProcedimentController extends Controller
{
    // Query per trobar tots els procediments d'una fase
    public static function procedimentsDeFase($faseID) {

        $procediments = Procediment::where('fase', $faseID)->orderBy('ordre')->get();

        return $procediments;
    }

    // Tots els procediments
    public static function allProcediments() {
        return Procediment::orderBy('ordre')->get();
    }

    public static function getProcediment($slug) {
        $procediment = Procediment::where('slug', $slug)->get();
        return $procediment[0];
    }

    // Llistat de procediments per gestió
    public function gestioProcediments() {

        if( auth()->check() ) {
            $procediments = $this->allProcediments();
            $fases = FaseController::allFases();

            return view('procediments.llistat', array(
                'titol' => 'Gestió de procediments',
                'fases' => $fases,
                'procediments' => $procediments
            ));
        } else {
            return redirect()->to('/gestio/acces');
        }

    }

    // Formulari de creació d'un procediment
    public function formCrearProcediment($faseSlug) {

        if( auth()->check() ) {
            $fase = FaseController::getFase($faseSlug);
            $allFases = FaseController::allFases();

            return view('procediments.crear', array(
                'titol' => 'Crear procediment',
                'fase' => $fase,
                'fases' => $allFases
            ));
        } else {
            return redirect()->to('/gestio/acces');
        }

    }

    // Crear procediment
    public function crearProcediment(Request $request) {

        if( auth()->check() ) {
            Procediment::create([
                'nom' => $request->input('nom'),
                'slug' => $request->input('slug'),
                'actor' => $request->input('actor'),
                'fase' => $request->input('fase'),
                'contingut' => $request->input('contingut'),
                'ordre' => $request->input('ordre')
            ]);

            return redirect('/gestio/procediments');
        } else {
            return redirect()->to('/gestio/acces');
        }

    }

    // Formulari de creació d'un procediment
    public function formModificarProcediment($slugProcediment) {

        if( auth()->check() ) {
            $allFases = FaseController::allFases();
            $procediment = $this->getProcediment($slugProcediment);

            return view('procediments.modificar', array(
                'titol' => 'Modificar procediment',
                'fases' => $allFases,
                'procediment' => $procediment
            ));
        } else {
            return redirect()->to('/gestio/acces');
        }


    }

    // Modificació d'un procediment
    public function modificarProcediment(Request $request) {

        if( auth()->check() ) {
            $procediment = Procediment::find( $request->input('id') );
            $procediment->nom = $request->input('nom');
            $procediment->slug = $request->input('slug');
            $procediment->actor = $request->input('actor');
            $procediment->fase = $request->input('fase');
            $procediment->contingut = $request->input('contingut');
            $procediment->ordre = $request->input('ordre');
            $procediment->save();

            return redirect('/gestio/procediments');
        } else {
            return redirect()->to('/gestio/acces');
        }

    }

    // Confirmació per eliminar un procediment
    public function formEliminarProcediment($slugProcediment) {

        if( auth()->check() ) {
            $procediment = $this->getProcediment($slugProcediment);

            return view('procediments.eliminar', array(
                'titol' => 'Eliminar procediment',
                'procediment' => $procediment
            ));
        } else {
            return redirect()->to('/gestio/acces');
        }

    }

    // Eliminar procediment
    public function eliminarProcediment(Request $request) {

        Procediment::where('id', $request->input('id'))->delete();

        return redirect('/gestio/procediments');

    }

}
