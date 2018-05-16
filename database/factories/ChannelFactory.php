<?php

use Faker\Generator as Faker;

$factory->define(App\Channel::class, function (Faker $faker) {
    return [
        //
        'name' => $faker->text(30),
        'logoUrl' => $faker->url,
        'ChannelUrl' => $faker->url,
        'identertainer' => $faker->numberBetween(0,10),
        'created_at' => $faker->dateTime(),
        'updated_at' => $faker->dateTime()
    ];
});
