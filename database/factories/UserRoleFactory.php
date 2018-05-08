<?php

use Faker\Generator as Faker;

$factory->define(App\Role::class, function (Faker $faker) {
    return [
        'name'=>"Adminisrator",
        'slug'=>"admin",
        'description'=>"Full rules admin",
        'group'=>"admins"
    ];
});
