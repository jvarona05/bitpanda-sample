<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Http\Resources\WalletResource;
use Tests\Utils\WalletUtils;
use Tests\ApiTestCase;
use App\Wallet;


class WalletTest extends ApiTestCase
{
    /**
     * @test
     */
    public function a_user_can_get_their_wallets()
    {        
        $this->getJson(route('api.wallets'))
            ->assertStatus(200)
            ->assertJsonStructure(WalletUtils::$userWalletStructure);
    }

    /**
     * @test
     */
    public function a_user_can_get_a_single_wallet()
    {        
        $wallet = Wallet::first();

        $walletResource = new WalletResource($wallet);
        
        $this->getJson(route('api.wallet.show', ['id' => $wallet->id]))
            ->assertStatus(200)
            ->assertJson([ 
                'data' => $walletResource->jsonSerialize()
            ]);
    }
}
