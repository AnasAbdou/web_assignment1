<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Productline::class, function (Faker $faker) {
    return [
        'name'=>$faker=>word,
        'code'=>$faker=>randomNumper(4)
    ];
});
