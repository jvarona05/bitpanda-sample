<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CountrySeeder::class);
        $this->call(UserSeeder::class);
        $this->call(FiatSeeder::class);
        $this->call(PaymentOptionSeeder::class);
        $this->call(FiatProviderDetailSeeder::class);
    }
}
