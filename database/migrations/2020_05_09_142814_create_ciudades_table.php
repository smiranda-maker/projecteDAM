<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCiudadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ciudades', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',20);
            $table->integer('precioCarton');
            $table->timestamps();
        });

         //A la hora de hacer la migración de la tabla crea las siguientes columnas.
         DB::table('ciudades')->insert(
            array([
                 'nombre' => 'Madrid',
                 'precioCarton' => 20],
                [
                 'nombre' => 'Dubai',
                 'precioCarton' => 30],
                [
                 'nombre' => 'Las Vegas',
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
        Schema::dropIfExists('ciudades');
    }
}
