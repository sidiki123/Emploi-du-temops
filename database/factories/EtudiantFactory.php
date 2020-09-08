<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Etudiant;
use Faker\Generator as Faker;

$factory->define(Etudiant::class, function (Faker $faker) {
    return [
        'nom'=>$faker->sentence(1,true),
        'prenom'=>$faker->sentence(1,true),
        'email'=>$faker->sentence(1,true),
        'idniveau'=>$faker->randomDigit(1,true),
    ];
});
