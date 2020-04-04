<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\Utils\WalletUtils;
use Tests\TestCase;
use Laravel\Passport\Passport;
use App\User;


class WalletTest extends TestCase
{
    use RefreshDatabase;

    public function setUp(): void
    {
        parent::setUp();

        $this->seed();

        Passport::actingAs(
            User::first()
        );
    }

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {        
        $this->getJson(route('api.wallet.index'))
            ->assertStatus(200)
            ->assertJsonStructure(WalletUtils::$userWalletStructure);
    }
}
