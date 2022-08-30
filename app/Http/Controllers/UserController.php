<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Procediment;
use App\Models\Fase;

class UserController extends Controller
{
    // Mostrar formulari de gestió
    public function loginForm() {
        return view('login', array(
            'titol' => 'Accés Gestió'
        ));
    }

    // Get tots els usuaris
    public static function getUsuaris() {

        return User::all();

    }

    // Validació de credencials
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

    // Pàgina de benvinguda a la gestió
    public function gestio() {

        if( auth()->check() ) {
            return view('gestio', array(
                'titol' => 'Gestió'
            ));
        } else {
            return redirect()->to('/');
        }

    }

    // Tancar sessió
    public function sortir() {
        auth()->logout();
        return redirect()->to('/');
    }

    // Llistar usuaris
    public function llistat() {

        if( auth()->check() ) {

            $usuaris = $this->getUsuaris();

            return view('usuaris.llistat', array(
                'titol' => "Gestió d'usuaris",
                'usuaris' => $usuaris
            ));

        } else {
            return redirect()->to('/gestio/acces');
        }

    }

    // Formulari crear usuaris
    public function formCrearUsuari() {

        if( auth()->check() ) {

            return view('usuaris.crear', array(
                'titol' => 'Crear usuari',
            ));
        } else {
            return redirect()->to('/gestio/acces');
        }

    }

    // Crear usuari
    public function crearUsuari(Request $request) {

        if( auth()->check() ) {

            $password = password_hash($request->input('password'), PASSWORD_DEFAULT);
            User::create([
                'nom' => $request->input('nom'),
                'dni' => $request->input('dni'),
                'email' => $request->input('email'),
                'password' => $password
            ]);

            return redirect('/gestio/usuaris');
        } else {
            return redirect()->to('/gestio/acces');
        }

    }

    // Formulari odificar usuari
    public function formModificarUsuari($id) {

        if( auth()->check() ) {

            $usuari = User::where('id', $id)->get();

            return view('usuaris.modificar', array(
                'titol' => 'Modificar usuari',
                'usuari' => $usuari[0]
            ));

            return redirect('/gestio/usuaris');
        } else {
            return redirect()->to('/gestio/acces');
        }
    }

    // Modificar usuari
    public function modificarUsuari(Request $request) {


        if( auth()->check() ) {

            if($request->filled('password')) {

                if($request->input('password') == $request->input('confirm-password')) {

                    $password = password_hash($request->input('password'), PASSWORD_DEFAULT);

                    $usuari = User::find( $request->input('id') );
                    $usuari->nom = $request->input('nom');
                    $usuari->dni = $request->input('dni');
                    $usuari->password = $password;
                    $usuari->email = $request->input('email');
                    $usuari->save();

                    return redirect('/gestio/usuaris');

                } else {

                    return back()->withErrors([
                        'message' => "Les contrasenyes no coincideixen."
                    ]);
                }

            } else {

                $usuari = User::find( $request->input('id') );
                $usuari->nom = $request->input('nom');
                $usuari->dni = $request->input('dni');
                $usuari->email = $request->input('email');
                $usuari->save();

                return redirect('/gestio/usuaris');

            }
        } else {
            return redirect()->to('/gestio/acces');
        }
    }

    // Formulari eliminar usuari
    public function formEliminarUsuari($id) {

        if( auth()->check() ) {
            $usuari = User::where('id', $id)->get();

            return view('usuaris.eliminar', array(
                'titol' => 'Eliminar usuari',
                'usuari' => $usuari[0]
            ));
        } else {
            return redirect()->to('/gestio/usuaris');
        }

    }

    // Eliminar usuari
    public function EliminarUsuari(Request $request) {

        if( auth()->check() ) {

            User::where('id', $request->input('id'))->delete();
            return redirect('/gestio/usuaris');

        } else {
            return redirect()->to('/gestio/acces');
        }

    }

    // Cercador
    public function cercador(Request $request) {

        $string = $request->query('q');

        $procedimentsContingut = Procediment::where('nom', 'LIKE', "%$string%")
        ->orWhere('contingut', 'LIKE', "%$string%")
        ->orWhere('actor', 'LIKE', "%$string%")->get();

        $faseDescripcio = Fase::where('descripcio', 'LIKE', "%$string%")
        ->orWhere('nom', 'LIKE', "%$string%")->get();



        return view('cercador', array(
            'titol' => 'Resultats',
            'llistatProcediments' => $procedimentsContingut,
            'llistatFases' => $faseDescripcio
        ));

    }

}
