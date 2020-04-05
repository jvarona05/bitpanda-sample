<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Http\Resources\FiatWalletResource;
use App\Http\Resources\WalletTransactionResource;
use App\Repository\WalletRepository;
use Tests\ApiTestCase;
use App\FiatWallet;

class FiatWalletTest extends ApiTestCase
{
    /**
     * @test
     */
    public function a_user_can_get_their_fiat_wallets()
    {        
        $fiatWallets = WalletRepository::getUserFiatWallets($this->user);

        $fiatWaletResourceCollection = FiatWalletResource::collection($fiatWallets);
        
        $this->getJson(route('api.fiat_wallets'))
            ->assertStatus(200)
            ->assertJson([
                'data' => $fiatWaletResourceCollection->jsonSerialize()
            ]);
    }

    /**
     * @test
     */
    public function a_user_can_get_a_single_fiat_wallet()
    {        
        $fiatWallet = FiatWallet::first();

        $fiatWalletResource = new FiatWalletResource($fiatWallet);
        
        $this->getJson(route('api.fiat_wallet.show', ['id' => $fiatWallet->id]))
            ->assertStatus(200)
            ->assertJson([ 
                'data' => $fiatWalletResource->jsonSerialize()
            ]);
    }

    /**
     * @test
     */
    public function a_user_can_get_fiat_wallet_transactions()
    {        
        $fiatWallet = FiatWallet::first();

        $transactionCollectionResource = WalletTransactionResource::collection(
            $fiatWallet->transactions
        );
        
        $this->getJson(route('api.fiat_wallet.transactions', ['id' => $fiatWallet->id]))
            ->assertStatus(200)
            ->assertJson([
                'data' => $transactionCollectionResource->jsonSerialize()
            ]);
    }
}
