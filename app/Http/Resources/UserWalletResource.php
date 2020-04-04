<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserWalletResource extends JsonResource
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
            'type' => 'collection',
            'attributes' => [
                'wallets' => WalletResource::collection($this->resource['wallets']),
                'commodity_wallets' => WalletResource::collection($this->resource['commodityWallets']),
                'fiat_wallets' => FiatWalletResource::collection($this->resource['fiatWallets']),
            ]
        ];
    }
}
