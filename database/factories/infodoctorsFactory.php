<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\doctors;
use Faker\Generator as Faker;

$factory->define(doctors::class, function (Faker $faker) {

    return [
        'department_id' => $faker->word,
        'special_id' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
