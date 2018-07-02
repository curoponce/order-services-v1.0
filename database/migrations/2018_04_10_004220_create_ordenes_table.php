<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdenesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordenes', function (Blueprint $table) {

            $table->increments('id');

            $table->integer('user_id')->unsigned();

            $table->integer('trabajador_id')->unsigned()->nullable();

            $table->date('fecha_inicio')->nullable();

            $table->date('fecha_fin')->nullable();

            $table->integer('servicio_id')->unsigned();

            $table->integer('estado_id')->unsigned();

            $table->TEXT('contenido');

            $table->foreign('user_id')->references('id')->on('users');

            $table->foreign('trabajador_id')->references('id')->on('trabajadores');

            $table->foreign('servicio_id')->references('id')->on('servicios');

            $table->foreign('estado_id')->references('id')->on('estados');
            
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ordenes');
    }
}
