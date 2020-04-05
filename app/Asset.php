<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    /**
     * Get wallets.
     */
    public function wallets()
    {
        return $this->hasMany(Wallet::class);
    }

    /**
     * Get prices history.
     */
    public function prices()
    {
        return $this->hasMany(AssetPrice::class);
    }

    /**
     * Get prices history.
     */
    public function pricesThisMonth()
    {
        return $this->hasMany(AssetPrice::class);
    }
}
