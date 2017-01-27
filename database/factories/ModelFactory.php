<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Petition::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->sentence(mt_rand(3, 10)),
        'published' => true,
        'summary' => join("\n\n", $faker->paragraphs(mt_rand(1, 3))),
        'body' => join("\n\n", $faker->paragraphs(mt_rand(3, 6))),
        'thankyou' => join("\n\n", $faker->paragraphs(mt_rand(1, 3))),
        'emailsubject' => $faker->sentence(mt_rand(3, 10)),
        'emailbody' => join("\n\n", $faker->paragraphs(mt_rand(1, 3))),
    ];
});

$factory->define(App\Signature::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'phone' => $faker->phoneNumber,
        'petition_id' => rand(1,20),
    ];
});

