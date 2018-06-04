<?php

use Faker\Generator as Faker;

$factory->define(App\CategoryGenre::class, function (Faker $faker) {
    return [
        //
        'category_id' => $faker->numberBetween(0,10),
        'genre_id' => $faker->numberBetween(0,10),
        'created_at' => $faker->dateTime(),
        'updated_at' => $faker->dateTime()
    ];
});
