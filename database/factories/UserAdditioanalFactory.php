<?php

use Faker\Generator as Faker;

$factory->define(App\UserAdditional::class, function (Faker $faker) {

    $faker = \Faker\Factory::create('ru_RU');

    return [
        'firstname'=>$faker->firstNameMale,
        'lastname'=>$faker->lastName,
        'patronymic'=>'Иванович'
    ];
});
