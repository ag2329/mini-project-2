<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;
use App\car;
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

$factory->define(car::class, function (Faker $faker) {
    $make = array(
        'Ford',
        'Honda',
        'Toyota'
    );
    $model = array(
        'model1',
        'model2',
        'model3'
    );
    return [
        'make' => $make[array_rand($make)],
        'model' => $model[array_rand($model)],
        'year' => mt_rand(1990, 2018)
    ];
});
