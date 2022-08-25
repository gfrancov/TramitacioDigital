<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Procediment;

class ProcedimentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Llistat de fases predefinides
        $procediments = [
            array('nom' => 'Enviament de la sol·licitud', 'slug' => 'enviament-de-la-solicitud', 'fase' => 1, 'contingut' => "                        <p>Haurà d'<b>enviar la sol·licitud</b> mitjançant un <b>correu electrònic</b>, depenent de l'àrea pot canviar l'adreça destinatària.</p>
            <p>En primer lloc ha d'omplir el següent formulari en format excel: </p>
            <a href='https://espai.interior.gencat.cat/Eines-recursos/Administracio-electronica/Documents/Formulari%20d%27enviament%20sol%C2%B7licitud.xlsx' class='btn btn-success mb-3'><i class='fa-solid fa-file-excel'></i> Descarregar excel</a>
            <p>I un cop omplert el formulari Excel, l'<b>enviarà</b> al <b>correu destinatari</b>, que pot ser un dels següents:</p>
            <div class='table-responsive my-4'>
                <table class='table table-striped'>
                    <thead>
                        <tr>
                            <th>Àrea destinatària</th>
                            <th>Adreça</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>DGP - Servei d'Organ. Admin. i Documentació	</td>
                            <td><a href='mailto:itpg0153@gencat.cat'>itpg0153@gencat.cat</a></td>
                        </tr>
                        <tr>
                            <td>DGPEIS - Área d'Auditoria de Serveis	</td>
                            <td><a href='mailto:auditoria.bombers@gencat.cat​'>auditoria.bombers@gencat.cat​</a></td>
                        </tr>
                        <tr>
                            <td>ISPC - SDG d'Admin. i Support Acadèmic	</td>
                            <td><a href='mailto:ispc.sgasa@gencat.cat'>ispc.sgasa@gencat.cat</a></td>
                        </tr>
                        <tr>
                            <td>SCT - Servei de Coord. Admin. i Organització	</td>
                            <td><a href='mailto:organitzacio.sct@gencat.cat​'>organitzacio.sct@gencat.cat​</a></td>
                        </tr>
                        <tr>
                            <td>Secció de Gestió Documental i Arxiu	</td>
                            <td><a href='mailto:arxiu_central_dint@gencat.cat​'>arxiu_central_dint@gencat.cat​</a></td>
                        </tr>
                        <tr>
                            <td>Área TIC	</td>
                            <td><a href='mailto:atic.interior@gencat.cat'>atic.interior@gencat.cat</a></td>
                        </tr>
                        <tr>
                            <td>Altres òrgans i unitats	</td>
                            <td><a href='mailto:suport_ae@gencat.cat​'>suport_ae@gencat.cat​</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
", 'ordre' => 1),
            array('nom' => 'Estudi de la sol·licitud', 'slug' => 'estudi-de-la-solicitud', 'fase' => 1, 'contingut' => "<p>El grup INT_GT Administració Digital rep la sol·licitud i s'hauran d'iniciar les següents accions:</p>", 'ordre' => 2),
            array('nom' => 'Prova procediment', 'slug' => 'prova-procediment', 'fase' => 3, 'contingut' => "                        <p>Haurà d'<b>enviar la sol·licitud</b> mitjançant un <b>correu electrònic</b>, depenent de l'àrea pot canviar l'adreça destinatària.</p>
            <p>En primer lloc ha d'omplir el següent formulari en format excel: </p>
            <a href='https://espai.interior.gencat.cat/Eines-recursos/Administracio-electronica/Documents/Formulari%20d%27enviament%20sol%C2%B7licitud.xlsx' class='btn btn-success mb-3'><i class='fa-solid fa-file-excel'></i> Descarregar excel</a>
            <p>I un cop omplert el formulari Excel, l'<b>enviarà</b> al <b>correu destinatari</b>, que pot ser un dels següents:</p>
            <div class='table-responsive my-4'>
                <table class='table table-striped'>
                    <thead>
                        <tr>
                            <th>Àrea destinatària</th>
                            <th>Adreça</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>DGP - Servei d'Organ. Admin. i Documentació	</td>
                            <td><a href='mailto:itpg0153@gencat.cat'>itpg0153@gencat.cat</a></td>
                        </tr>
                        <tr>
                            <td>DGPEIS - Área d'Auditoria de Serveis	</td>
                            <td><a href='mailto:auditoria.bombers@gencat.cat​'>auditoria.bombers@gencat.cat​</a></td>
                        </tr>
                        <tr>
                            <td>ISPC - SDG d'Admin. i Support Acadèmic	</td>
                            <td><a href='mailto:ispc.sgasa@gencat.cat'>ispc.sgasa@gencat.cat</a></td>
                        </tr>
                        <tr>
                            <td>SCT - Servei de Coord. Admin. i Organització	</td>
                            <td><a href='mailto:organitzacio.sct@gencat.cat​'>organitzacio.sct@gencat.cat​</a></td>
                        </tr>
                        <tr>
                            <td>Secció de Gestió Documental i Arxiu	</td>
                            <td><a href='mailto:arxiu_central_dint@gencat.cat​'>arxiu_central_dint@gencat.cat​</a></td>
                        </tr>
                        <tr>
                            <td>Área TIC	</td>
                            <td><a href='mailto:atic.interior@gencat.cat'>atic.interior@gencat.cat</a></td>
                        </tr>
                        <tr>
                            <td>Altres òrgans i unitats	</td>
                            <td><a href='mailto:suport_ae@gencat.cat​'>suport_ae@gencat.cat​</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
", 'ordre' => 1),
        ];

        // Inserir les fases
        foreach($procediments as $procediment) {
            Procediment::create($procediment);
        }
    }
}
