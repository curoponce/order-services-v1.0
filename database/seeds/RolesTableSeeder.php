<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Role::create([

        	'nombre' => 'cliente',
            'display_name' => 'cliente de la empresa'
        ]);

        \App\Role::create([

        	'nombre' => 'trabajador',
            'display_name' => 'trabajador de la empresa'
        ]);

        \App\Role::create([

        	'nombre' => 'admin',
            'display_name' => 'administrador de la página web'
        ]);
    }
}
