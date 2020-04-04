<?php

class FiatProviderDetailSeeder extends SeederBase
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fiatProviderDetails = $this->loadData('fiatProviderDetails');

        DB::table('fiat_provider_details')->insert($fiatProviderDetails);
    }
}
