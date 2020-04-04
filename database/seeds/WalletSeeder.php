<?php

use App\User;

class WalletSeeder extends SeederBase
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::all();
        $wallets = $this->loadData('wallets');

        foreach($users as $user) {
            foreach($wallets as $wallet) {
                $this->createWallet($user, $wallet);
            }
        }
    }

    private function createWallet($user, $wallet)
    {
        $user->wallets()->create($wallet['values'])
            ->transactions()->createMany($wallet['transactions']);
    }
}
