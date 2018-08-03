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

$factory->define(App\Casestudy::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'description' => $faker->sentence(50),
        'challenge' => $faker->sentence(10),
        'solution' => $faker->sentence(10),
        'numberOfApplicants' => $faker->numberBetween(0, 49),
        'numberOfMeeting' => $faker->numberBetween(10, 20),
        'numberOfDaysSaves' => $faker->numberBetween(1, 10),
        'numberOfHiring' => $faker->numberBetween(0,3),
        'emberVideo' => $faker->sentence(1),
        'imageCase' => $faker->sentence(1),
        'linkResources' => $faker->sentence(1),
        'author' => $faker->numberBetween(0,3),
        'description' => $faker->name,
        'created_at' => $faker->date(),
        'updated_at' => $faker->date(),

    ];


});
