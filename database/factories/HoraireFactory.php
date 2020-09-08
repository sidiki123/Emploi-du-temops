<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Horaire;
use Faker\Generator as Faker;

$factory->define(Horaire::class, function (Faker $faker) {
    return [
        'heure'=>$faker->dateTime()
    ];
});
