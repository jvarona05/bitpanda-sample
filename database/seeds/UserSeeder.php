<?php

class UserSeeder extends SeederBase
{
    private $bitPandaUser = [
        'name' => 'BitPanda',
        'email' => 'admin@bitpanda.com',
        'verified' => true
    ];
    
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // BitPanda user
        factory(App\User::class)->create($this->bitPandaUser);

        // Normal users
        factory(App\User::class, 5)->create();
    }
}
