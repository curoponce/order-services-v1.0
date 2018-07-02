<?php

use Illuminate\Database\Seeder;

class ConfiguracionesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // creando configuracion principal 
        DB::table('configuraciones')->insert([  
            'estilo_del_sitio' => 'style.css',       
            'nombre_del_sitio' => 'Vidrieria Cerro Azul',             
            'email_del_sitio' => 'admin@admin.com',
            'logo_del_sitio' => 'logo-cerro-azul.png',
            'favicon_del_sitio' => 'favicon.png',
            'descripcion_del_sitio' => 'Vidrieria Cerro Azul es una empresa dedicada a la prestacion de diversos servicios a la comunidad.',
            'codigo_css_del_sitio' => '',
            'codigo_js_del_sitio' => '',
            'copyright_del_sitio' => 'Copyright © 2018 Vidrieria Cerro Azul. All Rights Reserved.', 
            'facebook_url' => '#',
            'linkedin_url' => '#',
            'twitter_url' => '#',
            'pinterest_url' => '#',
            'google_plus_url' => '#',
            'seccion_servicio' => '1',
            'seccion_nosotros' => '1',
            'seccion_proyectos' => '1',
            'seccion_logros' => '1',
            'seccion_team' => '1',
            'seccion_testimonios' => '1',
            'seccion_proveedores' => '1',
            'seccion_contactos' => '1'
        ]);
    }
}
