<?php
use Faker\Factory as Faker;
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

$factory->define(App\User::class, function ($faker) {

    // override from Faker\Generator to Faker\Factory
    // This is for Indonesia location
    $faker = Faker::create('id_ID');

    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => str_random(10),
        'remember_token' => str_random(10),
    ];
});

/**
 * call it to insert data to table
 */
 
 # $users = factory(App\User::class, 5)->create();
