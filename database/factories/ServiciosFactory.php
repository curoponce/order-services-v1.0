<?php

use Faker\Generator as Faker;

$factory->define(App\Servicio::class, function (Faker $faker) {
    $titulo = $faker->unique()->sentence(1);

    return [
        'servicio_titulo' => $titulo,
        'servicio_descripcion' 	=> $faker->text(300),
        'imagen' 		=> $faker->imageUrl($width = 1240, $height = 600),
    ];
});
