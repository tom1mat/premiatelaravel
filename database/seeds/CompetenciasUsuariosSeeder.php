<?php

use Illuminate\Database\Seeder;

class CompetenciasUsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('competencias_usuarios')->insert([
            "competencia_id"  => 1,
            "user_id" => 1
        ]);
        DB::table('competencias_usuarios')->insert([
            "competencia_id"  => 1,
            "user_id" => 2
        ]);
        DB::table('competencias_usuarios')->insert([
            "competencia_id"  => 1,
            "user_id" => 3
        ]);
    }
}
