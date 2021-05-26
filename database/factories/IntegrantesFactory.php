<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Integrantes;
use Faker\Generator as Faker;

$factory->define(Integrantes::class, function (Faker $faker) {
    return [
        'name' => $faker->firstName,
        'second_name' => $faker->lastName,
        'nacionalidad' => $faker->randomElement(['V', 'E']),
        'cedula' => $faker->unique()->numberBetween(300000,35000000),
        'email' => $faker->unique()->freeEmail,
        'telefono' => $faker->phoneNumber,
        'fecha_nacimiento' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'sexo' => $faker->numberBetween(0, 1)
    ];
});
