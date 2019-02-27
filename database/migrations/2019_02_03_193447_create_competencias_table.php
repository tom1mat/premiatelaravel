<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompetenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('competencias', function (Blueprint $table) {
            $table->increments('id');
            $table->string("competencia");
            $table->integer("local")->unsigned()->nullable();;
            $table->integer("visitante")->unsigned()->nullable();;
            $table->foreign("local")->references("id")->on("competidores")->onDelete('set null');
            $table->foreign("visitante")->references("id")->on("competidores")->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('competencias');
    }
}
