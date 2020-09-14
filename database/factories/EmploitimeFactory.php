<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Emploitime;
use Faker\Generator as Faker;

$factory->define(Emploitime::class, function (Faker $faker) {
    return [
        
        
      
        'idniveau'=>$faker->randomDigit(1,true),
        'iddating'=>$faker->randomDigit(1,true),
        'idhoraire'=>$faker->randomDigit(1,true),
        'idmatiere'=>$faker->randomDigit(1,true),
        'idprofesseur'=>$faker->randomDigit(1,true),
    ];
});
