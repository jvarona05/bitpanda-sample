<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class assetPriceResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'type' => 'candle',
            'attributes' => [
                'open' => $this->open_price,
                'high' => $this->high_price,
                'close' => $this->close_price,
                'low' => $this->low_price,
                'time' => $this->created_at->toString()
            ],
            'id' => $this->id
        ];
    }
}
