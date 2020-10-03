<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\ProductType;
use Faker\Generator as Faker;

$factory->define(ProductType::class, function (Faker $faker) {
    return [
        'productType' => $this->faker->ProductType
    ];
});
