<?php

class PaymentOptionSeeder extends SeederBase
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $paymentOptions = $this->loadData('paymentOptions');

        DB::table('payment_options')->insert($paymentOptions);
    }
}
