<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Http\Resources\FiatWalletResource;
use App\Repository\WalletRepository;
use Tests\ApiTestCase;

class FiatWalletTest extends ApiTestCase
{
    /**
     * @test
     */
    public function a_user_can_get_their_fiat_wallets()
    {        
        $fiatWallets = WalletRepository::getUserFiatWallets($this->user);

        $fiatWaletResourceCollection = FiatWalletResource::collection($fiatWallets);
        
        $this->getJson(route('api.fiat-wallets'))
            ->assertStatus(200)
            ->assertJson([
                'data' => $fiatWaletResourceCollection->jsonSerialize()
            ]);
    }
}
