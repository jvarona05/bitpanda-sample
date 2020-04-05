<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class FiatWalletResource extends JsonResource
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
            'type' => 'fiat_wallet',
            'attributes' => [
                'name' => $this->fiat->name,
                'balance' => $this->balance,
                'fiat_id' => $this->fiat_id,
                'symbol' => $this->fiat->symbol
            ],
            'id' => $this->id
        ];
    }
}
