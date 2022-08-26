<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\User;

class UserController extends Controller
{
    // Mostrar formulari de gestió
    public function loginForm() {
        return view('login', array(
            'titol' => 'Accés Gestió'
        ));
    }

    public function validarLogin(Request $request) {

        $dni = $request->input('dni');
        $password = $request->input('password');

        if(Auth::attempt(['dni' => $dni, 'password' => $password])) {
            return redirect()->to('/gestio');
        } else {
            return back()->withErrors([
                'message' => "L'usuari introduït no es correcte o no està donat d'alta al portal."
            ]);
        }

    }

    public function gestio() {

        if( auth()->check() ) {

            return view('gestio', array(
                'titol' => 'Gestió'
            ));

        } else {

            return redirect()->to('/');

        }

    }

    public function sortir() {
        auth()->logout();
        return redirect()->to('/');
    }

    public static function checkLogin() {

        if( auth()->check() ) {
        } else {
            return redirect()->to('/gestio/acces');
        }

    }



}
