<?php

namespace App\Repository;

use Illuminate\Database\Eloquent\Collection;
use Carbon\Carbon;
use App\Asset;

class StatsRepository
{
    static function getOhlcFilteredByRangeDate(string $dateRange) : Collection
    {
        if(!in_array($dateRange, ['day','month','year']))
            throw new \Exception("Error: \"$dateRange\" in not a valid date range");

        // example value [whereDay, whereMonth, whereYear]
        $whereClassString = "where" . ucfirst($dateRange);

        return Asset::with(['prices' => function ($query) use ($whereClassString, $dateRange){
            $query->$whereClassString('created_at', Carbon::now()->$dateRange);   
        }])->get()->keyBy->symbol;
    }
}