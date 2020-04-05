<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ohlcResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return assetPriceResource::collection($this->prices);
    }
}
