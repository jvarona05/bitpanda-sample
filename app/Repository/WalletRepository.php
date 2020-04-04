<?php

namespace App\Repository;

use Illuminate\Database\Eloquent\Collection;
use App\Wallet;
use App\User;

class WalletRepository
{
    static function getUserCryptocoinWallets(User $user) : Collection
    {
        return $user->wallets()->with(['asset'])->cryptocoinWallets()->get();
    }

    static function getUserMetalWallets(User $user) : Collection
    {
        return $user->wallets()->with(['asset'])->metalWallets()->get();
    }

    static function getUserFiatWallets(User $user) : Collection
    {
        return $user->fiatWallets()->with(['fiat'])->get();
    }
}