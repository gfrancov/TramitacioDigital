<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fase;
use App\Http\Controllers\ProcedimentController;

class FaseController extends Controller
{
    // Landing page
    public function landing() {
        $fases = Fase::all();
        return view('landing', array(
            'titol' => 'Inici',
            'fases' => $fases
        ));
    }

    // Fase webpage
    public function fase() {
        return view('fases', array(
            'titol' => 'Fase'
        ));
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

    public function getFase($slug) {
        // Query per trobar la info de tota la fase
        $fase = Fase::where('slug', $slug)->get();
        return $fase[0];
    }

    public function nextFase($ordre) {
        $nextFase = $ordre + 1;
        $fase = Fase::where('ordre', $nextFase)->get();
        if(isset($fase[0])) {
            return $fase[0];
        }
    }

    public function allFases() {
        return Fase::orderBy('ordre')->get();
    }

}
