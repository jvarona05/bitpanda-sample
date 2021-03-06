<?php

use SeederUtils\Wallets;

class WalletSeeder extends SeederBase
{
    use Wallets;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $wallets = $this->loadData('wallets');

        $this->initWalletsForAllUsers('wallets', $wallets);
    }
}
