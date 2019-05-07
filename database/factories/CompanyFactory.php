<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Company;
use Faker\Generator as Faker;

$factory->define(Company::class, function (Faker $faker) {
    return [
        'name' => $faker->company,
        'phone' => $faker->phoneNumber
    ];
});

// use in terminal
// ,10 = number data to create
//  factory(\App\Company::class,10)->create();
