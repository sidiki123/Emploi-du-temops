<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Niveau;
use Faker\Generator as Faker;

$factory->define(Niveau::class, function (Faker $faker) {
    return [
        'niveau'=>$faker->sentence(1,true),
    ];
});
