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

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(Insonico\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(Insonico\Article::class, function (Faker\Generator $faker) {


    return [
        'head'          => $faker->sentence(2),
        'description'   => $faker->text(50),
        'body'          => $faker->text(500),
        'category'      => $faker->sentence(1),
//        'autor'         => $faker->sentence(2),
//        'date'          => $faker->sentence(3),



    ];
});