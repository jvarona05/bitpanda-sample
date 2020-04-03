<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FiatWallet extends Model
{
    /**
     * Get user.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get user.
     */
    public function fiat()
    {
        return $this->belongsTo(Fiat::class);
    }

    /**
     * Get all of wallet's transactions.
     */
    public function transactions()
    {
        return $this->morphMany(WalletTransaction::class, 'wallet');
    }
}
