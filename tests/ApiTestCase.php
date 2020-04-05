<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Laravel\Passport\Passport;
use App\User;

/**
 * Tests for the api
 */
abstract class ApiTestCase extends BaseTestCase
{
    use CreatesApplication, RefreshDatabase;

    public $user;

    public function setUp(): void
    {
        parent::setUp();

        $this->seed();

        $this->user = User::first();

        Passport::actingAs($this->user);
    }
}
