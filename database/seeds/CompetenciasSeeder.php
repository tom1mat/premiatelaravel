<?php

use Illuminate\Database\Seeder;

class CompetenciasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('competencias')->insert([
            'competencia' => "Lucha de escuelas zona norte",
            'local' => 1,
            'visitante' => 2
        ]);

        DB::table('competencias')->insert([
            'competencia' => "Lucha de escuelas zona sur",
            'local' => 3,
            'visitante' => 4
        ]);
    }
}
