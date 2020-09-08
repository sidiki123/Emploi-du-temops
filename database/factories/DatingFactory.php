<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Dating;
use Faker\Generator as Faker;

$factory->define(Dating::class, function (Faker $faker) {
    return [
       'date_de_debut'=>$faker->date(),
       'date_de_fin'=>$faker->date(),
    ];
});
