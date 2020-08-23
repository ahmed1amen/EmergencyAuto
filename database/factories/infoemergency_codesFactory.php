<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\emergency_codes;
use Faker\Generator as Faker;

$factory->define(emergency_codes::class, function (Faker $faker) {

    return [
        'name' => $faker->word,
        'icon' => $faker->word,
        'title' => $faker->word,
        'description' => $faker->word,
        'color' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
