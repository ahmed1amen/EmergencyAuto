<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\departments;
use Faker\Generator as Faker;

$factory->define(departments::class, function (Faker $faker) {

    return [
        'name' => $faker->word,
        'numberOfBeds' => $faker->word,
        'alarmSound' => $faker->word,
        'hospital_id' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
