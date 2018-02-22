<?php

use App\Blog;
use App\Category;
use App\Tag;
use App\User;
use Faker\Generator as Faker;

$factory->define(Blog::class, function (Faker $faker) use ($factory) {

    return [
        'user_id' => $faker->randomElement(User::pluck('id')->toArray()),
        'category_id' => $faker->randomElement(Category::pluck('id')->toArray()),
        'status' => 'publish',
        'title' => $faker->realText(50),
        'image' => 'files/_test/' . rand(1, 10) . '.jpg',
        'summary' => $faker->realText(200),
        'content' => $faker->realText(1000),
    ];
});
