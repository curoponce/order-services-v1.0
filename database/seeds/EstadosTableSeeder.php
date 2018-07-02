<?php

use Illuminate\Database\Seeder;

class EstadosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Creando estados
        DB::table('estados')->insert([            
            'nombre' => 'En espera',
        ]);

        // Creando estados
        DB::table('estados')->insert([            
            'nombre' => 'En proceso',
        ]);

        // Creando estados
        DB::table('estados')->insert([            
            'nombre' => 'Finalizado',
        ]);
    }
}
