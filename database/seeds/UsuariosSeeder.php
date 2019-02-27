<?php

use Illuminate\Database\Seeder;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id' => 1,
            'tipo' => "ADMIN",
            'nombre' => "Agustín",
            'apellido' => "Fontova",
            'email' => "agusfontova@gmail.com",
            'pais' => "Argentina",
            'password' => bcrypt('agusfontova'),
        ]);
    }
}
