<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // Xifrar contrasenya
        $password = password_hash('test', PASSWORD_DEFAULT);

        // Llistat de usuaris
        $users = [
            array('nom' => 'Gabriel Franco', 'dni' => '47334571L', 'email' => 'gabrielfranco@gencat.cat', 'password' => $password)
        ];

        // Inserir les fases
        foreach($users as $user) {
            User::create($user);
        }
    }
}
