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
}
