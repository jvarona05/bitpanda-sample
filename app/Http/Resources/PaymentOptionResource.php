<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PaymentOptionResource extends JsonResource
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
            'type' => 'payment_option',
            'attributes' => [
                'short_name' => $this->short_name,
                'name' => $this->name,
                'description' => $this->description,
                'terms' => $this->terms,
                'fiat_provider_details' => FiatProviderDetailResource::collection($this->fiatProviderDetails),
                'unavailable' => $this->unavailable,
                'is_voucher' => $this->is_voucher,
                'is_instant' => $this->is_instant,
                'enabled' => $this->enabled,
                'savings_enabled' => $this->savings_enabled
            ],
            'id' => $this->id
        ];
    }
}
