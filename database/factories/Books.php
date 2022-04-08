<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Books;
use Faker\Generator as Faker;

$factory->define(Books::class, function (Faker $faker) {
    return [
       'title'=>$faker->sentence,
       'description'=>$faker->sentence,
       'pages'=>$faker->sentence
    ];
});
