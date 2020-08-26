<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Nurse;
use Faker\Generator as Faker;

$factory->define(Nurse::class, function (Faker $faker) {

    return [
        'Job' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
