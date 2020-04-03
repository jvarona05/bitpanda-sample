<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wallet extends Model
{
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
}
