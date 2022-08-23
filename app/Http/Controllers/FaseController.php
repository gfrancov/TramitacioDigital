<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fase;

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
        return view('fase', array(
            'titol' => 'Fase'
        ));
    }
}
