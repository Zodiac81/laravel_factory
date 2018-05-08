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
        $role = factory(App\Role::class)->create(); //создаем роль

        factory(App\User::class, 'admin', 5)->create()->each(function ($user) use($role) {

            $role->users()->attach($user);
            $user->user_additional()->save(factory(App\UserAdditional::class)->make());
            //$user->roles()->save(factory(App\Role::class)->make());
        });;

    }
}
