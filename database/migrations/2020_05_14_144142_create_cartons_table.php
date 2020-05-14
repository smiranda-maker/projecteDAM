<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cartons', function (Blueprint $table) {
            $table->id();
            $table->BigInteger('partida_id')->unsigned();
            $table->BigInteger('user_id')->unsigned();
            $table->foreign('partida_id')->references('id')->on('partidas');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('numeros',100);
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
        Schema::dropIfExists('cartons');
    }
}
