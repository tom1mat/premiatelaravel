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
        DB::table('users')->insert([
            'id' => 2,
            'tipo' => "NORMAL",
            'nombre' => "Juan",
            'apellido' => "López",
            'email' => "juanlopez@gmail.com",
            'pais' => "Argentina",
            'password' => bcrypt('juanlopez'),
        ]);
        DB::table('users')->insert([
            'id' => 3,
            'tipo' => "NORMAL",
            'nombre' => "Juan",
            'apellido' => "Pérez",
            'email' => "juanperez@gmail.com",
            'pais' => "Argentina",
            'password' => bcrypt('juanperez'),
        ]);
        DB::table('users')->insert([
            'id' => 4,
            'tipo' => "NORMAL",
            'nombre' => "Juana",
            'apellido' => "Martínez",
            'email' => "juanamartinez@gmail.com",
            'pais' => "Argentina",
            'password' => bcrypt('juanamartinez'),
        ]);
    }
}
