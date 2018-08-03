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



$factory->define(App\Store::class, function (Faker $faker) {
    return [
        'user_id' => $faker->numberBetween(1,2),
        'assessment_id' => $faker->numberBetween(1,2),
        'proglanguage' => $faker->sentence(5),
        'framelanguage' => $faker->sentence(5),
        'framecss' => $faker->sentence(5),
        'framehtml' => $faker->sentence(5),
        'created_at' => $faker->date(),
        'updated_at' => $faker->date(),
    ];


});