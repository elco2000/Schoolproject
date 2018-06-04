<?php

use Faker\Generator as Faker;

$factory->define(App\CategoryChannel::class, function (Faker $faker) {
    return [
        //
        'category_id' => $faker->numberBetween(0,10),
        'channel_id' => $faker->numberBetween(0,10),
        'created_at' => $faker->dateTime(),
        'updated_at' => $faker->dateTime()
    ];
});
