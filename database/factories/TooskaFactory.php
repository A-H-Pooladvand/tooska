<?php

use App\Plan;
use App\Sample;
use App\Service;
use App\User;
use App\WhyChooseUs;
use Faker\Generator as Faker;

$factory->define(Plan::class, function (Faker $faker) use ($factory) {

    return [
        'user_id' => $faker->randomElement(User::pluck('id')->toArray()),
        'price' => $faker->randomNumber(rand(6, 8)),
        'summary' => $faker->realText(200),
        'content' => $faker->realText(5000),
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

$factory->define(Service::class, function (Faker $faker) use ($factory) {

    return [
        'title' => $faker->realText(70),
        'image' => 'files/_test/' . rand(1, 10) . '.jpg',
        'content' => $faker->realText(200),
    ];
});

$factory->define(Sample::class, function (Faker $faker) use ($factory) {

    return [
        'title' => $faker->realText(70),
        'link' => $faker->url,
        'image' => 'files/_test/' . rand(1, 10) . '.jpg',
        'content' => $faker->realText(10000),
    ];
});
