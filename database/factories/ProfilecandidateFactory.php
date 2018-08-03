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



$factory->define(App\Profilecandidate::class, function (Faker $faker) {
    return [
        'candidate_id' => $faker->numberBetween(1,3),
        'profilecandidatePicture' => $faker->sentence(1),
        'country' => $faker->sentence(1),
        'zip' => $faker->sentence(1),
        'phone' => $faker->numberBetween(1,100),
        'mobile' => $faker->numberBetween(1,100),
        'address' => $faker->sentence(1),
        'linkedin' => $faker->sentence(1),
        'facebook' => $faker->sentence(1),
        'github' => $faker->sentence(1),
        'twitter' => $faker->sentence(1),
        'biography' => $faker->sentence(5),
        'website' => $faker->sentence(1),
        'created_at' => $faker->date(),
        'updated_at' => $faker->date(),
    ];


});