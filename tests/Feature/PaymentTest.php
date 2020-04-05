<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\ApiTestCase;
use Tests\TestCase;
use Tests\Utils\PaymentUtils;

class PaymentTest extends ApiTestCase
{
    /**
     * @test
     */
    public function a_user_can_get_the_payment_options()
    {                
        $a = $this->getJson(route('api.payment_options'))
            ->assertStatus(200)
            ->assertJsonStructure(PaymentUtils::$paymentOptionsStructure);
    }
}
