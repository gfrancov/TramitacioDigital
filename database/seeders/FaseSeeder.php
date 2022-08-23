<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Fase;

class FaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Llistat de fases predefinides
        $fases = [
            array('nom' => 'Sol·licitud', 'slug' => 'solicitud', 'icona' => 'fa-copy', 'descripcio' => 'Fase per identificar les característiques principals del tràmit sol·licitant.', 'ordre' => 1),
            array('nom' => 'Alta', 'slug' => 'alta', 'icona' => 'fa-file-circle-plus', 'descripcio' => "Fase per a l'alta del tràmit a les eines necessàries​.", 'ordre' => 2),
            array('nom' => 'Construcció', 'slug' => 'construccio', 'icona' => 'fa-wrench', 'descripcio' => 'Fase de descripció funcional i parametritzar el tràmit​.', 'ordre' => 3),
            array('nom' => 'Proves', 'slug' => 'proves', 'icona' => 'fa-flask-vial', 'descripcio' => 'Fase per a realitzar proves de validació i verificació​.', 'ordre' => 4),
            array('nom' => 'Implantació', 'slug' => 'implantacio', 'icona' => 'fa-earth-europe', 'descripcio' => 'Fase de posada en marxa del tràmit a les eines corporatives​.', 'ordre' => 5),
        ];

        // Inserir les fases
        foreach($fases as $fase) {
            Fase::create($fase);
        }
    }
}
