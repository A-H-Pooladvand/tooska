<?php

use App\Plan;
use App\User;
use App\WhyChooseUs;
use Faker\Generator as Faker;

$factory->define(Plan::class, function (Faker $faker) use ($factory) {

    return [
        'user_id' => $faker->randomElement(User::pluck('id')->toArray()),
        'price' => $faker->randomNumber(rand(6, 8)),
        'content' => $faker->realText(500),
        'title' => $faker->realText(50),
    ];
});

$factory->define(WhyChooseUs::class, function (Faker $faker) use ($factory) {

    return [
        'user_id' => $faker->randomElement(User::pluck('id')->toArray()),
        'title' => $faker->realText(70),
        'image' => 'files/_test/' . rand(1, 10) . '.jpg',
        'summary' => $faker->realText(200),
    ];
});
