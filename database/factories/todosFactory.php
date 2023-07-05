<?php
use App\model;
use Faker\Generator as Faker;
use App\Todo;
$factory->define(Todo::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(3),
        'description' => $faker->text(100),
        'completed' => false
    ];
});
