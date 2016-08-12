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
        'first_name' => $faker->firstname,
        'last_name' => $faker->lastname,
        'birthday' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'gender' => $faker->randomElement($array = array ('m','f')),
        'biography' => $faker->realText($maxNbChars = 200, $indexSize = 2),
        'role' => $faker->randomElement($array = array ('administrator', 'editor', 'author')),
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});


$factory->define(App\Post::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'image' => $faker->imageUrl($width = 640, $height = 480),
        'status' => $faker->randomElement($array = array('pending', 'approved')),
        'user_id' => $faker->numberBetween($min = 1, $max = 30),
        'tags' => $faker->text($maxNbChars = 20) ,
        'content' => $faker->realText($maxNbChars = 500, $indexSize = 3),
    ];
});