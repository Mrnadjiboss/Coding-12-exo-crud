<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Testimonial;
use Faker\Generator as Faker;

$factory->define(Testimonial::class, function (Faker $faker) {
    return [
        'name'=>$faker->name,
        'job'=>$faker->jobTitle,
        "img_path" => $faker -> Imageurl(),
        'text'=>$faker->text()
    ];
});
