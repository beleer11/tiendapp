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
            $table->bigIncrements("id");
            $table->string("nombre", 20);
            $table->string("talla", 20);
            $table->text("observaciones");
            $table->bigInteger("id_marca")->unsigned();
            $table->integer("cantidad_inventario");
            $table->dateTime("fecha_embarque");

            //Foreign key
            $table->foreign('id_marca')->references('id')->on('marcas');

            $table->softDeletes();
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
        Schema::dropIfExists('productos');
    }
}
