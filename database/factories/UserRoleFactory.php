<?php

use Faker\Generator as Faker;

$factory->defineAs(App\UserRole::class, 'admin', function (Faker $faker) {
    return [
        'name'=>"Adminisrator",
        'slug'=>"admin",
        'description'=>"Full rules admin",
        'group'=>"admins"
    ];
});
