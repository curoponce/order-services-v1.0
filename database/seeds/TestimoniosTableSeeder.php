<?php

use Illuminate\Database\Seeder;

class TestimoniosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Creando testimonios de prueba
        DB::table('testimonios')->insert([
            'user_id' => 1,            
            'testimonio' => 'Vidrieria cerro azul lo maximo XD'
        ]);

        // Creando testimonios de prueba
        DB::table('testimonios')->insert([
            'user_id' => 1,            
            'testimonio' => 'Servicios 100% recomendados'
        ]);
    }
}
