<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Team;
use Faker\Generator as Faker;

$factory->define(Team::class, function (Faker $faker) {
    return [
        'name'=>$faker->name,
        'job'=>$faker-> jobTitle,
        'img_path' => $faker -> imageurl()
    ];
});