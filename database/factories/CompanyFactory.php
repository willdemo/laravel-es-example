<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(\App\Company::class, function (Faker $faker) {
    $faker = \Faker\Factory::create('zh_CN');
    return [
        'name'   => $faker->company,
        'city'   => $faker->city,
        'vision' => $faker->catchPhrase(),
        'email'  => $faker->email,
        'phone'  => $faker->phoneNumber,
    ];
});
