<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
            'name' => 'Jose Diaz',
            'email' => 'josevicentediazsusa@gmail.com',
            'password' => Hash::make('diazConstructiosWebSite2021Deployment'),
            'remember_token' => str_random(10),
        ]);
    }
}
// composer require laravel/helpers