<?php

use Illuminate\Database\Seeder;
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
            'name' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'password' => Hash::make('password'),
            'verified' => false,
            'mobile' => '34-685-42-57-29',
            'mobile_verified' => false,
            'birthday' => '1993-11-16',
            'street' => 'street 445',
            'zipcode' => '28019',
            'iso' => 'ES',
            'country_id' => 64
        ]);
    }
}
