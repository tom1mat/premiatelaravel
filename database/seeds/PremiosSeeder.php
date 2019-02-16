<?php

use Illuminate\Database\Seeder;

class PremiosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('premios')->insert([
            'premio' => "Moto Zanella",
            'imagen' => "zanella.jpg",
        ]);
        DB::table('premios')->insert([
            'premio' => "Parlante Panacom",
            'imagen' => "panacom.jpg",
        ]);
        DB::table('premios')->insert([
            'premio' => "Parlante Panacom",
            'imagen' => "panacom.jpg",
        ]);
        DB::table('premios')->insert([
            'premio' => "Play 4",
            'imagen' => "play4.jpg",
        ]);
    }
}
