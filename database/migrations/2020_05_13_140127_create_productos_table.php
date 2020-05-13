<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',20);
            $table->string('descripcion',200)->nullable();
            $table->integer('precio');
            $table->string('url',100)->nullable();
            $table->integer('stock');
            $table->boolean('disposicion')->default(true);
            $table->timestamps();
        });


        DB::table('productos')->insert(
            array([
                 'nombre' => 'Producto1',
                 'descripcion' => 'Descricion producto 1....',
                 'precio'=>1000,
                 'stock'=>10],
                [
                 'nombre' => 'Producto2',
                 'descripcion' => 'Descripcion producto 2....',
                 'precio'=>1500,
                 'stock'=>15 ],
                [
                 'nombre' => 'Producto3',
                 'descripcion' => 'Descripcion producto 3....',
                 'precio'=>2000,
                 'stock'=>20]
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
        Schema::dropIfExists('productos');
    }
}
