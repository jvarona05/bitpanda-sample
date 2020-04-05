<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class FiatProviderDetailResource extends JsonResource
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
            'type' => 'fiat_provider_detail',
            'attributes' => [
                'fee_fix' => $this->fee_fix,
                'fee_percent' => $this->fee_percent,
                'fee_max' => $this->fee_max,
                'fiat_id' => $this->fiat_id,
                'vip_fee_percent_difference' => $this->vip_fee_percent_difference,
                'savings_enabled' => $this->savings_enabled
            ],
            'id' => $this->id
        ];
    }
}
