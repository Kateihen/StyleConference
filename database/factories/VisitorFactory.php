<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Visitor;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

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

$factory->define(Visitor::class, function (Faker $faker) {
	return [
		'name' => $faker->name,
		'email' => $faker->unique()->safeEmail,
		'comments' => $faker->sentence,
		'num_of_passes' => $faker->numberBetween(1, 5),
	];
});
