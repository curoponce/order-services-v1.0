<?php

use Faker\Generator as Faker;

$factory->define(App\Proyecto::class, function (Faker $faker) {


    $titulo = $faker->unique()->sentence(2);

    return [
        'titulo' => $titulo,
        'servicio_id'   => rand(1,6),
        'descripcion' 	=> $faker->text(500),
        'imagen' 		=> $faker->imageUrl(),
    ];
});
