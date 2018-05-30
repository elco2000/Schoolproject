<?php

use Faker\Generator as Faker;

$factory->define(App\Reaction::class, function (Faker $faker) {
    return [
        //
        'text' => $faker->realText(200, 2),
        'account_idaccount' => $faker->numberBetween(0,10),
        'channel_id' => $faker->numberBetween(0,10),
        'created_at' => $faker->dateTime(),
        'updated_at' => $faker->dateTime()
    ];
});
