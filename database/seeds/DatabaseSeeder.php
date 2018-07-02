<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(ConfiguracionesTableSeeder::class);
        $this->call(ServiciosTableSeeder::class);
        $this->call(ProyectosTableSeeder::class);
        $this->call(SeccionesTableSeeder::class);
        
        $this->call(TrabajadoresTableSeeder::class);
        $this->call(TestimoniosTableSeeder::class);
        $this->call(ProveedoresTableSeeder::class);
        $this->call(EstadosTableSeeder::class);
        /*$this->call(OrdenesTableSeeder::class);*/
    }
}
