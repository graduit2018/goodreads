<?php

use Faker\Generator as Faker;

$factory->define(App\Book::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(5),
        'author' => $faker->firstName.' '.$faker->lastName,
        'isbn13' => $faker->isbn13,
    ];
});
