<?php

use Faker\Generator as Faker;

$factory->define(App\Category::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence(1),
        'description' => $faker->realText(200, 2),
        'created_at' => $faker->dateTime(),
        'updated_at' => $faker->dateTime()
    ];
});
