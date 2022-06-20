<?php

use Faker\Generator as Faker;

$factory->define(App\Dosen::class, function (Faker $faker) {
    return [
        'nidn' => $faker->nik(),
 'nama' => $faker->name(),
 'status' => $faker->suffix(),
 'jafung' => $faker->title(),
 'pakar' => $faker->jobTitle()
    ];
});
