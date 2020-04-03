<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AssetPrice extends Model
{
    /**
     * Get asset.
     */
    public function asset()
    {
        return $this->belongsTo(Asset::class);
    }
}
