<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Employee;
use Faker\Generator as Faker;

$factory->define(Employee::class, function (Faker $faker) {
    return [
          	'name' => $faker->name('male'|'female') ,
            'email' => $faker->companyEmail,
            'address' => $faker->address,
            'city' => $faker->city, 
            'country' => $faker->country,
            'salary' => $faker->numberBetween($min = 1000, $max = 9000),
            'credit_card_no' => $faker->creditCardNumber,
            'birth_date' => $faker->date($format = 'Y-m-d', $max = '1996-12-12'),
    ];
});
