<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class WalletResource extends JsonResource
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
            'type' => 'wallet',
            'attributes' => [
                'name' => $this->name,
                'balance' => $this->balance,
                'symbol' => $this->asset->symbol,
                'pending_transactions_count' => $this->pending_transactions_count,
                'deleted' => isset($this->deleted_at)
            ],
            'id' => $this->id
        ];
    }
}
