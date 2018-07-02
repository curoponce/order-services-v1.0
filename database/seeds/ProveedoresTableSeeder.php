<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ProveedoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Creando proveedores de prueba
         DB::table('proveedores')->insert([            
            'nombre' => '',             
            'imagen' => '1.jpg',
            'url' => '#' 
        ]);
        DB::table('proveedores')->insert([            
            'nombre' => '',             
            'imagen' => '2.png',
            'url' => '#' 
        ]);
        
        DB::table('proveedores')->insert([            
            'nombre' => '',             
            'imagen' => '3.png',
            'url' => '#' 
        ]);

        DB::table('proveedores')->insert([            
            'nombre' => '',             
            'imagen' => '4.gif',
            'url' => '#' 
        ]);
    }
}
