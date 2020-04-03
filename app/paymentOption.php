<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaymentOption extends Model
{
    /**
     * Get fiat provider details.
     */
    public function fiatProviderDetails()
    {
        return $this->hasMany(FiatProviderDetail::class);
    }
}
