<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\ohlcResource;
use App\Asset;

class StatsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function ohlc()
    {
        $asset = Asset::with('prices')->get()->keyBy->symbol;

        return ohlcResource::collection($asset);
    }
}
