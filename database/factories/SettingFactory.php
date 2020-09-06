<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Setting;
use Faker\Generator as Faker;

$factory->define(Setting::class, function (Faker $faker) {

    return [
        'sms_username' => $faker->word,
        'sms_password' => $faker->word,
        'sms_template' => $faker->word,
        'twilio_account_sid' => $faker->word,
        'twilio_auth_token' => $faker->word,
        'twilio_twilio_phone_number' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
