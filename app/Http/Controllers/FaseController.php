<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fase;
use App\Http\Controllers\ProcedimentController;
use App\Http\Controllers\UserController;

class FaseController extends Controller
{
    // Landing page
    public function landing() {
        $fases = $this->allFases();
        return view('landing', array(
            'titol' => 'Inici',
            'fases' => $fases
        ));
    }

    // Fase webpage
    public function fase() {

        if( auth()->check() ) {
            return view('fases', array(
                'titol' => 'Fase'
            ));
        } else {
            return redirect()->to('/gestio/acces');
        }


    }

    public function printFase($slugFase) {

        // Aconseguir totes les dades de la fase
        $getFase = $this->getFase($slugFase);

        // Següent fase
        $nextFase = $this->nextFase($getFase->ordre);

        // Aconseguir els procediments
        $actualProcediments = ProcedimentController::procedimentsDeFase($getFase->id);

        // Totes les fases i procediments
        $fases = Fase::orderBy('ordre')->get();
        $procediments = ProcedimentController::allProcediments();


        return view('fase', array(
            'titol' => $getFase->nom,
            'actualFase' => $getFase,
            'actualProcediments' => $actualProcediments,
            'seguentFase' => $nextFase,
            'procediments' => $procediments,
            'fases' => $fases
        ));

    }

    // Aconseguir info de la fase segons l'slug
    public static function getFase($slug) {
        $fase = Fase::where('slug', $slug)->get();
        return $fase[0];
    }

    // Aconseguir següent fase segons l'ordre
    public function nextFase($ordre) {
        $nextFase = $ordre + 1;
        $fase = Fase::where('ordre', $nextFase)->get();
        if(isset($fase[0])) {
            return $fase[0];
        }
    }

    // Aconseguir totes les fases
    public static function allFases() {
        return Fase::orderBy('ordre')->get();
    }

    // Llistat gestió de les fases
    public function gestioFases() {

        if( auth()->check() ) {

            $fases = $this->allFases();

            return view('fases.llistat', array(
                'titol' => 'Gestió de fases',
                'fases' => $fases
            ));

        } else {
            return redirect()->to('/gestio/acces');
        }

    }

    // Formulari modificació
    public function formModificarFase($slugFase) {

        if( auth()->check() ) {
            $fase = $this->getFase($slugFase);

            return view('fases.modificar', array(
                'titol' => 'Modificar fase',
                'fase' => $fase
            ));
        } else {
            return redirect()->to('/gestio/acces');
        }

    }

    // Modificació de fase
    public function modificarFase(Request $request) {

        if( auth()->check() ) {
            $fase = Fase::find( $request->input('id') );
            $fase->nom = $request->input('nom');
            $fase->slug = $request->input('slug');
            $fase->icona = $request->input('icona');
            $fase->descripcio = $request->input('descripcio');
            $fase->ordre = $request->input('ordre');
            $fase->save();

            return redirect('/gestio/fases');

        } else {
            return redirect()->to('/gestio/acces');
        }

    }

    // Formulari d'eliminació de fase
    public function formEliminarFase($slugFase) {

        if( auth()->check() ) {
            $fase = $this->getFase($slugFase);

            return view('fases.eliminar', array(
                'titol' => 'Eliminar fase',
                'fase' => $fase
            ));
        } else {
            return redirect()->to('/gestio/acces');
        }

    }

    // Eliminar fase
    public function eliminarFase(Request $request) {

        Fase::where('id', $request->input('id'))->delete();

        return redirect('/gestio/fases');

    }

    // Formulari creació de fase
    public function formCrearFase() {

        if( auth()->check() ) {
            return view('fases.crear', array(
                'titol' => 'Crear procediment'
            ));
        } else {
            return redirect()->to('/gestio/acces');
        }

    }

    // Creació d'una fase
    public function crearFase(Request $request) {
        if( auth()->check() ) {
            Fase::create([
                'nom' => $request->input('nom'),
                'slug' => $request->input('slug'),
                'icona' => $request->input('icona'),
                'descripcio' => $request->input('descripcio'),
                'ordre' => $request->input('ordre')
            ]);

            return redirect('/gestio/fases');
        } else {
            return redirect()->to('/gestio/acces');
        }
    }

}
