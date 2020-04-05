<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Web;
use Faker\Generator as Faker;

$factory->define(Web::class, function (Faker $faker) {
    return [
        'name'              => $faker->firstName,
        'id_web_category'   => $faker->numberBetween($min = 1, $max = 2),
        'id_eselon'         => $faker->numberBetween($min = 1, $max = 13),
        'url_name'          => $faker->unique()->url,
        'ip_address'        => $faker->unique()->ipv4,
        'description'       => $faker->sentence(),
        'status'            => $faker->numberBetween($min = 0, $max = 1),
        'image'             => $faker->imageUrl($width = 100, $height = 100)
    ];
});
