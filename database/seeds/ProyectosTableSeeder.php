<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Faker\Generator as Faker;

class ProyectosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('proyectos')->insert([            
            'titulo' => 'Proyecto manparas-1',             
            'servicio_id' => '1',
            'descripcion' => '',
            'imagen' => 'manparas-1.jpg',
            'created_at' => Carbon::now() 
        ]);

        DB::table('proyectos')->insert([            
            'titulo' => 'Proyecto manparas-2',             
            'servicio_id' => '1',
            'descripcion' => '',
            'imagen' => 'manparas-2.jpg', 
            'created_at' => Carbon::now()
        ]);

        DB::table('proyectos')->insert([            
            'titulo' => 'Proyecto manparas-3',             
            'servicio_id' => '1',
            'descripcion' => '',
            'imagen' => 'manparas-3.jpg',
            'created_at' => Carbon::now() 
        ]);





        DB::table('proyectos')->insert([            
            'titulo' => 'Proyecto puertas-1',             
            'servicio_id' => '2',
            'descripcion' => '',
            'imagen' => 'puertas-1.jpg',
            'created_at' => Carbon::now() 
        ]);


        DB::table('proyectos')->insert([            
            'titulo' => 'Proyecto puertas-2',             
            'servicio_id' => '2',
            'descripcion' => '',
            'imagen' => 'puertas-2.jpg',
            'created_at' => Carbon::now() 
        ]);

        DB::table('proyectos')->insert([            
            'titulo' => 'Proyecto puertas-3',             
            'servicio_id' => '2',
            'descripcion' => '',
            'imagen' => 'puertas-3.jpg',
            'created_at' => Carbon::now() 
        ]);

        DB::table('proyectos')->insert([            
            'titulo' => 'Proyecto puertas-4',             
            'servicio_id' => '2',
            'descripcion' => '',
            'imagen' => 'puertas-4.jpg',
            'created_at' => Carbon::now() 
        ]);

        DB::table('proyectos')->insert([            
            'titulo' => 'Proyecto puertas-5',             
            'servicio_id' => '2',
            'descripcion' => '',
            'imagen' => 'puertas-5.jpg',
            'created_at' => Carbon::now() 
        ]);



        DB::table('proyectos')->insert([            
            'titulo' => 'Proyecto decoracion-1',             
            'servicio_id' => '3',
            'descripcion' => '',
            'imagen' => 'decoracion-1.jpg',
            'created_at' => Carbon::now() 
        ]);


        DB::table('proyectos')->insert([            
            'titulo' => 'Proyecto decoracion-2',             
            'servicio_id' => '3',
            'descripcion' => '',
            'imagen' => 'decoracion-2.jpg',
            'created_at' => Carbon::now() 
        ]);

        DB::table('proyectos')->insert([            
            'titulo' => 'Proyecto decoracion-3',             
            'servicio_id' => '3',
            'descripcion' => '',
            'imagen' => 'decoracion-3.jpg',
            'created_at' => Carbon::now() 
        ]);




        DB::table('proyectos')->insert([            
            'titulo' => 'Proyecto techos-1',             
            'servicio_id' => '4',
            'descripcion' => '',
            'imagen' => 'techos-1.jpg',
            'created_at' => Carbon::now() 
        ]);

        DB::table('proyectos')->insert([            
            'titulo' => 'Proyecto techos-2',             
            'servicio_id' => '4',
            'descripcion' => '',
            'imagen' => 'techos-2.jpg',
            'created_at' => Carbon::now() 
        ]);

    }
}
