<?php

use Faker\Generator as Faker;
use App\Todo;

$factory->define(Todo::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence(3),
        'description' => $faker->paragraph(4),
        'completed' => false
    ];
});
