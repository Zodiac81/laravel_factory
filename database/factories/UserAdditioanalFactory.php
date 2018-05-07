<?php

use Faker\Generator as Faker;

$factory->defineAs(App\UserAdditional::class, 'admin', function (Faker $faker) {
    return [
        'firstname'=>$faker->firstNameMale,
        'lastname'=>$faker->lastName,
        'patronymic'=>$faker->firstName
    ];
});
