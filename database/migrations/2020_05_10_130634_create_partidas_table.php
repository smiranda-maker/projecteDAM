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
            $table->BigInteger('ciudad_id')->unsigned();
            $table->datetime('fechaEmpieza');
            $table->string('numerosQueHanSalido')->nullable();
            $table->boolean('linea')->default(false);
            $table->boolean('bingo')->default(false);
            $table->string('diagonal')->default(false);
            $table->foreign('ciudad_id')->references('id')->on('ciudads');
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
        Schema::dropIfExists('partidas');
    }
}
