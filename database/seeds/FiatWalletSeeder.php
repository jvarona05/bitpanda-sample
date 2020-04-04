<?php

use SeederUtils\Wallets;

class FiatWalletSeeder extends SeederBase
{
    use Wallets;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $wallets = $this->loadData('fiatWallets');

        $this->initWalletsForAllUsers('fiatWallets', $wallets);
    }
}
