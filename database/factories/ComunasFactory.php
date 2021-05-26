<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Comuna;


$factory->define(Comuna::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence,
        'situr' => $faker->phoneNumber
    ];
});

