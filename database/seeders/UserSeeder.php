<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        # Generate random user (only with Seeder)
        /* User::create([
            'username' =>  Str::random(25),
            'email' =>  Str::random(49) . '@gmail.com',
            'password' => Hash::make('password'),
            'first_name' =>  Str::random(12),
            'last_name' =>  Str::random(12),
            'country_code' => rand(10000, 99999),
            'city' => Str::random(10),
            'address' => Str::random(30),
            'country' => Str::random(10),
           ]); */

        # Generate multiples randoms users (using factories)
        # This command will use the following file : database\factories\UsersFactory.php
        # Give in parameter to the method count the number of creation wanted
        User::factory()->count(60)->create();

    }
}
