<?php

use Faker\Generator as Faker;

$factory->define(App\Genre::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence(1),
        'created_at' => $faker->dateTime(),
        'updated_at' => $faker->dateTime()
    ];
});
