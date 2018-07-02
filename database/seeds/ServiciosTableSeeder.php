<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ServiciosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create servicios de prueba
        

         DB::table('servicios')->insert([            
            'titulo' => 'Mamparas',             
            'descripcion' => 'Son ensambladas con perfiles de aluminio, de fabricación nacional e importada de acuerdo con el tipo de serie requerida, utilizando cristales crudos o templados. Su correcto funcionamiento es garantizado por el riguroso control de calidad de los insumos y accesorios de fijación, cierre y rodamiento.',
            'imagen' => '1.png', 
        ]);

         DB::table('servicios')->insert([            
            'titulo' => 'Puertas de ducha',             
            'descripcion' => 'Son elaboradas con perfiles de aluminio y accesorios anodizados, pulidos o acerados, utilizando cristales templados de 6, 8 y 10 mm.',
            'imagen' => '7.jpg', 
        ]);

         DB::table('servicios')->insert([            
            'titulo' => 'Decoración',             
            'descripcion' => 'Son estructuras de aluminio y cristal, de formas planas y curvas que permiten revestir integralmente los exteriores de una edificación',
            'imagen' => '2.png', 
        ]);

         DB::table('servicios')->insert([            
            'titulo' => 'Techos',             
            'descripcion' => 'Fabricados con cristales crudos o templados en una gran variedad de formas, con bordes acerados finamente acabados.',
            'imagen' => '5.jpg', 
        ]);

         DB::table('servicios')->insert([            
            'titulo' => 'Servicio técnico',             
            'descripcion' => 'Servicio de mantenimiento correctivo y/o preventivo de cualquier sistema de acristalamiento todos los días de la semana en residencias, edificaciones, casas de playa, oficinas, etc.',
            'imagen' => '12.jpg', 
        ]);

         DB::table('servicios')->insert([            
            'titulo' => 'Asesoría general',             
            'descripcion' => 'La experiencia y constante capacitación de nuestro personal profesional y técnico nos permite darles a los clientes la asesoría en el acristalamiento de sus edificaciones.',
            'imagen' => '17.jpg', 
        ]);

        /*for ($x = 1; $x <= 10; $x++) {
            \App\Servicio::create([
                'titulo' => 'servicio-'. $x,
                'descripcion' => 'lorem ipsum XD',
                
                'imagen'        => \Faker\Provider\Image::imageUrl($width = 900, $height = 400),
            ]);
        }*/

        /*factory(App\Servicio::class, 3)->create();*/

    }
}
