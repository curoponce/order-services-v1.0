<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConfiguracionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('configuraciones', function (Blueprint $table) {
            $table->increments('id');

            $table->string('estilo_del_sitio');               
            $table->string('nombre_del_sitio');             
            $table->string('email_del_sitio');
            $table->string('logo_del_sitio');
            $table->string('favicon_del_sitio');
            $table->string('descripcion_del_sitio');
            $table->text('codigo_css_del_sitio');
            $table->text('codigo_js_del_sitio');
            $table->string('copyright_del_sitio');                        
            $table->string('facebook_url');
            $table->string('linkedin_url');
            $table->string('twitter_url');
            $table->string('pinterest_url');
            $table->string('google_plus_url');
            $table->integer('seccion_servicio');
            $table->integer('seccion_nosotros');
            $table->integer('seccion_proyectos');
            $table->integer('seccion_logros');
            $table->integer('seccion_team');
            $table->integer('seccion_testimonios');
            $table->integer('seccion_proveedores');
            $table->integer('seccion_contactos');

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
        Schema::dropIfExists('configuraciones');
    }
}
