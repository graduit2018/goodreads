<?php

use Faker\Generator as Faker;

$factory->define(App\Book::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(5),
        'author' => $faker->name,
        'isbn13' => $faker->isbn13,
        'description' => $faker->text(400),
        'published_at' => $faker->dateTimeBetween($startDate = '-10 years', $endDate = '-1 year', $timezone = null),
    ];
});
