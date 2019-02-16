<?php

use Illuminate\Database\Seeder;

class CompetidoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('competidores')->insert([
            'id' => 1,
            'competidor' => "Colegio San Vicente",
        ]);
        DB::table('competidores')->insert([
            'id' => 2,
            'competidor' => "Colegio San Carlos",
        ]);
        DB::table('competidores')->insert([
            'id' => 3,
            'competidor' => "Colegio Inmaculada Concepción",
        ]);
        DB::table('competidores')->insert([
            'id' => 4,
            'competidor' => "Colegio Normal 5",
        ]);
    }
}
