<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeccionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('secciones', function (Blueprint $table) {
            $table->increments('id');

            $table->string('seccion_nombre_servicios');
            $table->string('seccion_titulo_servicios');
            $table->text('seccion_servicio_descripcion');

            $table->string('seccion_nombre_nosotros');
            $table->string('seccion_titulo_nosotros');
            $table->text('seccion_nosotros_descripcion');
            $table->text('seccion_nosotros_mision');
            $table->text('seccion_nosotros_vision');

            $table->string('section_nosotros_imagen');

            $table->string('seccion_nombre_proyectos');
            $table->string('seccion_titulo_proyectos');

            $table->string('seccion_nombre_logros');
            $table->string('seccion_titulo_logros');
            $table->string('seccion_logros_block1_icono');
            $table->string('seccion_logros_block1_numero');
            $table->string('seccion_logros_block1_titulo');

            $table->string('seccion_logros_block2_icono');
            $table->string('seccion_logros_block2_numero');
            $table->string('seccion_logros_block2_titulo');

            $table->string('seccion_logros_block3_icono');
            $table->string('seccion_logros_block3_numero');
            $table->string('seccion_logros_block3_titulo');

            $table->string('seccion_logros_block4_icono');
            $table->string('seccion_logros_block4_numero');
            $table->string('seccion_logros_block4_titulo');

            $table->string('seccion_nombre_team');
            $table->string('seccion_titulo_team');
            $table->text('seccion_team_descripcion');

            $table->string('seccion_nombre_testimonios');
            $table->string('seccion_titulo_testimonios');

            $table->string('seccion_titulo_proveedores');

            $table->string('seccion_nombre_contacto');
            $table->string('seccion_titulo_contacto');

            $table->string('seccion_contacto_titulo_direccion');
            $table->text('seccion_contacto_direccion');

            $table->string('seccion_contacto_titulo_email');
            $table->string('seccion_contacto_email1');
            $table->string('seccion_contacto_email2');
            
            $table->string('seccion_contacto_titulo_telefono');
            $table->string('seccion_contacto_phone1');
            $table->string('seccion_contacto_phone2');


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
        Schema::dropIfExists('secciones');
    }
}
