<?php

class UserSeeder extends SeederBase
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // BitPanda user
        factory(App\User::class)->create([
            'name' => 'BitPanda',
            'email' => 'admin@bitpanda.com',
            'verified' => true
        ]);

        factory(App\User::class, 50)->create();
    }
}
