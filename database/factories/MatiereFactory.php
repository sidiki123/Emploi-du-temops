<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Matiere;
use Faker\Generator as Faker;

$factory->define(Matiere::class, function (Faker $faker) {
    return [
        'nom'=>$faker->sentence(1,true),
        'idprofesseur'=>$faker->randomDigit(1,true)
    ];
});
