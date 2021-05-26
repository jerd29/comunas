<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\ConsejoComunal;
use Faker\Generator as Faker;

$factory->define(ConsejoComunal::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence,
        'situr' => $faker->phoneNumber,
        'integrantes' => $faker->numberBetween(1, 100),
        'familias' => $faker->numberBetween(1, 100),
        'created_by' => 1

    ];
});
