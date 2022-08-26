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

}
