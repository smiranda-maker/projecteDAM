<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartidasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partidas', function (Blueprint $table) {
            $table->id();
            $table->string('tipoJuego',30);
            $table->integer('precioCarton')->default(20);

            $table->timestamps();
        });

        //A la hora de hacer la migración de la tabla crea las siguientes columnas.
        DB::table('partidas')->insert(
            array([
                 'tipoJuego' => 'Partida Rápida',
                 'precioCarton' => 20],
                [
                 'tipoJuego' => 'Partida Normal',
                 'precioCarton' => 30],
                [
                 'tipoJuego' => 'Partida Larga',
                 'precioCarton' => 40]
            )
        );


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('partidas');
    }
}
