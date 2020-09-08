<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Professeur;
use Faker\Generator as Faker;

$factory->define(Professeur::class, function (Faker $faker) {
    return [
        'nom_prof'=>$faker->sentence(1,true),
    ];
});
