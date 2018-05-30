<?php

use Faker\Generator as Faker;

$factory->define(App\Notification::class, function (Faker $faker) {
    return [
        'name' => $faker ->sentence(2),
        'text' => $faker->paragraph(10),
        'created_at' => $faker->dateTime(),
        'updated_at' => $faker->dateTime()
    ];
});
