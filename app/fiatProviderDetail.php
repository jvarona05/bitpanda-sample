<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FiatProviderDetail extends Model
{
    /**
     * Get fiat.
     */
    public function fiat()
    {
        return $this->belongsTo(Fiat::class);
    }

    /**
     * Get payment options.
     */
    public function paymentOption()
    {
        return $this->belongsTo(PaymentOption::class);
    }
}
