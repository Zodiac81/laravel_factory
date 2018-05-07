<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 'admin')->create()->each(function ($user) {
            $user->user_additional()->save(factory(App\UserAdditional::class,'admin')->make());
            $user->roles()->save(factory(App\UserRole::class, 'admin')->make());
        });;

    }
}
