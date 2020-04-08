<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Promotion;
use Faker\Generator as Faker;

$factory->define(Promotion::class, function (Faker $faker) {
    return [
        'name' => $faker->numberBetween($min = 2001, $max = 2018).' - '.$faker->numberBetween($min = 2001, $max = 2018),   
    ];
});
