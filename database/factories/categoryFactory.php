<?php

use Faker\Generator as Faker;
use App\User;

$factory->define(App\category::class, function (Faker $faker) {
    return [
        'name' => $faker->unique()->word,
        'description' => $faker->sentence,
        'user_id' => 1
    ];
});
