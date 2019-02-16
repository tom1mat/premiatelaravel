<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class SorteosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sorteos')->insert([
            'id' => 1,
            'sorteo' => "Sorteo Verano 1",
            'fecha' => Carbon::parse("2019-02-30"),
            'premio_id' => 1
        ]);
        DB::table('sorteos')->insert([
            'id' => 2,
            'sorteo' => "Sorteo Verano 2",
            'fecha' => Carbon::parse("2019-03-30"),
            'premio_id' => 2
        ]);
        DB::table('sorteos')->insert([
            'id' => 3,
            'sorteo' => "Sorteo Verano 3",
            'fecha' => Carbon::parse("2019-04-30"),
            'premio_id' => 3
        ]);
    }
}
