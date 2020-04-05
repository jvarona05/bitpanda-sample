<?php

namespace Tests\Utils;

class StatsUtils
{
    static $ohlcStructure = [
        'data' => [
            '*' => [
                [
                    'type',
                    'attributes' => [
                        'open',
                        'high',
                        'close',
                        'low',
                        'time'
                    ],
                    'id'
                ]
            ]
        ]
    ];
}

