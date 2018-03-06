<?php

use Faker\Generator as Faker;

$factory->define(\App\Item::class, function (Faker $faker) {
    return [
        'name' => $faker->words(3, true),
        'calories' => $faker->numberBetween(250,500),
    ];
});
