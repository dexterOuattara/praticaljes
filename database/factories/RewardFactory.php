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



$factory->define(App\Reward::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence(1),
        'description' => $faker->sentence(1),
        'tag' => $faker->sentence(1),
        'created_at' => $faker->date(),
        'updated_at' => $faker->date(),
    ];


});