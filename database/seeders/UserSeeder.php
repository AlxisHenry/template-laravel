<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'username' =>  Str::random(15),
            'email' =>  Str::random(10) . '@gmail.com',
            'password' => Hash::make('password'),
            'first_name' =>  Str::random(5),
            'last_name' =>  Str::random(5),
            'zip' => '67000',
            'city' => Str::random(5),
            'address' => Str::random(10),
            'country' => ucfirst(Str::random(5)),
        ]);
    }
}
