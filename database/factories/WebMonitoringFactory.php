<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Web;
use App\Model\WebMonitoring;
use Faker\Generator as Faker;

$factory->define(WebMonitoring::class, function (Faker $faker) {
    return [
        // 'id_web'    => Web::all()->random()->id,
        'id_web'    => $faker->unique()->numberBetween($min = 1, $max = 10),
        'status'    => $faker->numberBetween($min = 0, $max = 1),
        'visitors'  => $faker->numberBetween($min = 0, $max = 1000),
    ];
});
