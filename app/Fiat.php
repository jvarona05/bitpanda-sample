<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fiat extends Model
{
    /**
     * Get user wallets.
     */
    public function wallets()
    {
        return $this->hasMany(FiatWallet::class);
    }

    /**
     * Get fiat provider details.
     */
    public function providerDetails()
    {
        return $this->hasMany(FiatProviderDetail::class);
    }
}
