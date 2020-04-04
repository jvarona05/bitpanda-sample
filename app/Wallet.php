<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wallet extends Model
{
    public $timestamps = false;
    
    /**
     * Get user.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get asset.
     */
    public function asset()
    {
        return $this->belongsTo(Asset::class);
    }

    /**
     * Get all of wallet's transactions.
     */
    public function transactions()
    {
        return $this->morphMany(WalletTransaction::class, 'wallet');
    }

    /**
     * Scope a query to only include popular users.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeCryptocoinWallets($query)
    {
        return $query->where('assets.type', '=', 'cryptocoin')->join('assets', 'wallets.asset_id', '=', 'assets.id');
    }

    /**
     * Scope a query to only include popular users.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeMetalWallets($query)
    {
        return $query->where('assets.type', '=', 'metal')->join('assets', 'wallets.asset_id', '=', 'assets.id');
    }
}
