<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Intro;
use Faker\Generator as Faker;

$factory->define(Intro::class, function (Faker $faker) {
    
    return [
        "img_path" => $faker-> imageUrl(600, 600, "business"),
        "img_name" => $faker -> name

    ];
});
