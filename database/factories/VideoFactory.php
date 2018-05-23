<?php

use Faker\Generator as Faker;

$factory->define(App\Video::class, function (Faker $faker) {
    return [
        'title' => $faker ->sentence(2),
        'description' => $faker->paragraph(10),
        'videoUrl' => $faker->url,
        'created_at' => $faker->dateTime(),
        'updated_at' => $faker->dateTime()
    ];
});
