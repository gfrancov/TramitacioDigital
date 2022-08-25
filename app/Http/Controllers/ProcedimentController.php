<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Procediment;


class ProcedimentController extends Controller
{
    public static function procedimentsDeFase($faseID) {

        // Query per trobar tots els procediments d'una fase
        $procediments = Procediment::where('fase', $faseID)->orderBy('ordre')->get();

        return $procediments;
    }

    public static function allProcediments() {

        return Procediment::orderBy('ordre')->get();

    }
}
