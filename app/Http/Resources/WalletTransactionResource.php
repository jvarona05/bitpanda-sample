<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class WalletTransactionResource extends JsonResource
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
            'type' => 'wallet_transaction',
            'attributes' => [
                'action' => $this->action,
                'amount' => $this->amount,
                'date' => $this->created_at->toString()
            ],
            'id' => $this->id
        ];
    }
}
