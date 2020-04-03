<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WalletTransaction extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'actions',
    ];

    /**
     * Get the owning transaction model.
     */
    public function wallet()
    {
        return $this->morphTo();
    }
}
