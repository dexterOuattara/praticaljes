<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Assessment::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'description' => $faker->sentence(20),
        'level' => $faker->name,
        'timeassessment' => $faker->numberBetween(60,460),
        'image1' => $faker->name,
        'image2' => $faker->name,
        'image3' => $faker->name,
        'image4' => $faker->name,
        'image5' => $faker->name,
        'image6' => $faker->name,
        'requirement1' => $faker->sentence(50),
        'requirement2' => $faker->sentence(50),
        'requirement3' => $faker->sentence(50),
        'requirement4' => $faker->sentence(50),
        'requirement5' => $faker->sentence(50),
        'requirement6' => $faker->sentence(50),
        'requirement7' => $faker->sentence(50),
        'requirement8' => $faker->sentence(50),
        'requirement9' => $faker->sentence(50),
        'requirement10' => $faker->sentence(50),
        'price' => $faker->numberBetween(0,10),
        'numberapplicant' => $faker->numberBetween(0,10),
        'created_at' => $faker->date(),
        'updated_at' => $faker->date(),
    ];


});
