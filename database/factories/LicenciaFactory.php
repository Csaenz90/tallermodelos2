<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Models\Licencia::class, function (Faker $faker) {
    return [
        'tipo_licencia' => $faker->word,
        'valor_licencia' => $faker->numberBetween($min = 100000, $max = 900000)
    ];
});
