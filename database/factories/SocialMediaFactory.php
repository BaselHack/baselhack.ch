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

$factory->define(\App\Domain\Models\Social::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'icon' => $faker->randomElement(['fab fa-facebook-f', 'fab fa-github']),
        'url' => $faker->url,
    ];
});
