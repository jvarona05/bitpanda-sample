<?php

namespace SeederUtils;

use App\User;

trait Wallets 
{
    public function initWalletsForAllUsers(string $walletType, array $wallets) : void
    {
        if(!in_array($walletType, ['wallets', 'fiatWallets'])) throw new \Exception("Error: \"{$walletType}\" is not a correctly walletType");

        $users = User::all();

        foreach($users as $user) {
            foreach($wallets as $wallet) {
                $this->createWallet($walletType, $user, $wallet);
            }
        }
    }

    public function createWallet(string $walletType, User $user, array $wallet)
    {
        $user->$walletType()->create($wallet['values'])
            ->transactions()->createMany($wallet['transactions']);
    }
}