<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\Utils\WalletUtils;
use Tests\ApiTestCase;


class WalletTest extends ApiTestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testCanUserGetTheirWallets()
    {        
        $this->getJson(route('api.wallets'))
            ->assertStatus(200)
            ->assertJsonStructure(WalletUtils::$userWalletStructure);
    }
}
