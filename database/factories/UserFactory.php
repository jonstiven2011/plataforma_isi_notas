<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;
use Illuminate\Support\Str;
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

$factory->define(User::class, function (Faker $faker) {
    return [
        'fullname' 			=> $faker->name,
        'document' 			=> $faker->numberBetween($min = 11111111, $max = 9999999999),
        'email' 			=> $faker->unique()->safeEmail,
        'phone' 			=> $faker->numberBetween(10,9999999999),
        'curso_1' 			=> now(),
        'curso_2' 			=> now(),
        'curso_3' 			=> now(),
        'email_verified_at' => now(),
        'password' 			=> bcrypt('12345'),
        'remember_token' 	=> Str::random(10)
    ];
});
