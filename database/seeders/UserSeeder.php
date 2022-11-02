<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        return User::create([
            'name' => 'Muhammad',
            'email' => 'muhammadlive7858@gmail.com',
            'password' => Hash::make('muhammad'),
        ]);
    }
}
