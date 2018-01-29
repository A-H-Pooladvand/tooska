<?php

use App\Blog;
use App\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) use ($factory) {

    return [
        'category_type' => Blog::class,
        'title' => $faker->realText(50),
        'slug' => $faker->slug(1),
    ];
});
