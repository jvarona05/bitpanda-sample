<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\ohlcResource;
use App\Repository\StatsRepository;

/**
 * @group Stats
 */
class StatsController extends Controller
{
    /**
     * Get Open-High-Low-Close data.
     * 
     * Returns the ohlc data grouped by assets.
     *
     * @urlParam dateRange required The value can be can be [day, month or day].
     * @response { "data":{ "BTC":[ { "type":"candle", "attributes":{ "open":"8000.90", "high":"8149.50", "close":"8139.00", "low":"7995.00", "time":"Thu Mar 05 2020 05:00:00 GMT+0000" }, "id":6 }, { "type":"candle", "attributes":{ "open":"8140.00", "high":"8173.10", "close":"8131.90", "low":"8083.60", "time":"Thu Mar 05 2020 11:00:00 GMT+0000" }, "id":7 } ], "LTC":[ { "type":"candle", "attributes":{ "open":"54.66", "high":"56.34", "close":"56.34", "low":"54.62", "time":"Thu Mar 05 2020 05:00:00 GMT+0000" }, "id":1392 }, { "type":"candle", "attributes":{ "open":"56.39", "high":"56.74", "close":"56.10", "low":"55.47", "time":"Thu Mar 05 2020 11:00:00 GMT+0000" }, "id":1393 } ] } }
     * 
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function ohlc($dateRange)
    {
        $data = StatsRepository::getOhlcFilteredByRangeDate($dateRange);

        return ohlcResource::collection($data);
    }
}
