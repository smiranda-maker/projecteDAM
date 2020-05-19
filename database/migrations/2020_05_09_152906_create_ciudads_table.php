<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCiudadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ciudads', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',20);
            $table->timestamps();
        });

         //A la hora de hacer la migración de la tabla crea los siguientes registros.
         DB::table('ciudads')->insert(
            array(['nombre' => 'Madrid'],
                ['nombre' => 'Dubai'],
                ['nombre' => 'Las Vegas'])
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ciudads');
    }
}
