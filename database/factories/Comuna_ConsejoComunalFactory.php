<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comuna_ConsejoComunal;
use Faker\Generator as Faker;

$factory->define(Comuna_ConsejoComunal::class, function (Faker $faker) {
    return [
        // 'fk_id_org_comuna' => 1,
        // 'fk_id_org_cc' => 1
    ];
});
