<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    return [
        'category_name' => $faker->word,
        'created_at' => now(),
        'updated_at' => now()
    ];
});
