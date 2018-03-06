<?php

use Faker\Generator as Faker;

$factory->define(\App\Meal::class, function (Faker $faker) {
    return [
        'type' => $faker->boolean(75) ? 'meal' : 'snack',
        'created_at' => $faker->dateTimeBetween('last month', 'tomorrow'),
    ];
});
