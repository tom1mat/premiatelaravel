<?php

use Illuminate\Database\Seeder;

class SorteosUsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sorteos_usuarios')->insert([
            "sorteo_id"  => 1,
            "user_id" => 1
        ]);
        DB::table('sorteos_usuarios')->insert([
            "sorteo_id"  => 1,
            "user_id" => 2
        ]);
        DB::table('sorteos_usuarios')->insert([
            "sorteo_id"  => 1,
            "user_id" => 3
        ]);
    }
}
