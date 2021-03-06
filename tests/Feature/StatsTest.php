<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\ApiTestCase;
use Tests\Utils\StatsUtils;

class StatsTest extends ApiTestCase
{
    /**
     * @test
     */
    public function get_open_high_low_close_data_this_day()
    {                
        $this->getOpenHighLowCloseData('day');
    }

    /**
     * @test
     */
    public function get_open_high_low_close_data_this_month()
    {                
        $this->getOpenHighLowCloseData('month');
    }

    /**
     * @test
     */
    public function get_open_high_low_close_data_this_year()
    {                
        $this->getOpenHighLowCloseData('year');
    }

    /**
     * @test
     */
    public function get_not_found_in_ohlc_endpoint_if_date_range_is_not_correct()
    {                
        $this->getJson(route('api.stats.ohlc', ['dateRange' => 'not_correct']))
            ->assertStatus(404);
    }

    private function getOpenHighLowCloseData($dateRange)
    {
        return $this->getJson(route('api.stats.ohlc', ['dateRange' => $dateRange]))
            ->assertStatus(200)
            ->assertJsonStructure(StatsUtils::$ohlcStructure);
    }
}
