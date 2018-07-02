<?php

use Illuminate\Database\Seeder;
use App\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // Creando cuenta para el administrador
        User::create([
            'nombre' => 'alexis',
            'apellidos' => 'curo ponce',
            'telefono' => '925160261',           
            'direccion' => 'san vicente', 
            'email' => 'admin@admin.com',
            'password' => bcrypt('76124769'),
        ])->roles()->attach(['3']);

        for ($x = 1; $x <= 5; $x++) {
            User::create([
                'nombre' => 'usuario' . $x,
                'apellidos' => 'apellidos' . $x,
                'telefono' => '92516026' . $x,
                'direccion' => 'ciudad' . $x,
                'email' => 'usuario' . $x . '@mail.com',
                'password' => bcrypt('12345678')
            ])->roles()->attach(['1']);
        }

        for ($x = 6; $x <= 9; $x++) {
            User::create([
                'nombre' => 'usuario' . $x,
                'apellidos' => 'apellidos' . $x,
                'telefono' => '92516026' . $x,
                'direccion' => 'ciudad' . $x,
                'email' => 'usuario' . $x . '@mail.com',
                'password' => bcrypt('12345678')
            ])->roles()->attach(['3']);
        }

        for ($x = 10; $x <= 15; $x++) {
            User::create([
                'nombre' => 'usuario' . $x,
                'apellidos' => 'apellidos' . $x,
                'telefono' => '92516026' . $x,
                'direccion' => 'ciudad' . $x,
                'email' => 'usuario' . $x . '@mail.com',
                'password' => bcrypt('12345678')
            ])->roles()->attach(['2']);
        }

    }
}
