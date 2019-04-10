<?php

use Faker\Generator as Faker;

$factory->define(App\Numeros::class, function (Faker $faker) {
    return [
        'number_used' => rand(1000,9999),
    ];
});
