<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsuariosSeeder::class);
        $this->call(PremiosSeeder::class);
        $this->call(SorteosSeeder::class);
        $this->call(CompetidoresSeeder::class);
        $this->call(CompetenciasSeeder::class);
        $this->call(SorteosUsuariosSeeder::class);
        $this->call(CompetenciasUsuariosSeeder::class);
    }
}
