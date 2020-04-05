<?php

namespace Tests\Utils;

class WalletUtils
{
    static $userWalletStructure = [
        'data' => [
            'type',
            'attributes' => [
                'wallets' => [
                    [
                        'type',
                        'attributes' => [
                            'name',
                            'balance',
                            'symbol',
                            'pending_transactions_count',
                            'deleted'
                        ],
                        'id'
                    ]
                ],
                'commodity_wallets' => [
                    [
                        'type',
                        'attributes' => [
                            'name',
                            'balance',
                            'symbol',
                            'pending_transactions_count',
                            'deleted'
                        ],
                        'id'
                    ]
                ],
                'fiat_wallets' => [
                    [
                        'type',
                        'attributes' => [
                            'name',
                            'balance',
                            'symbol',
                            'fiat_id'
                        ],
                        'id'
                    ]
                ]
            ]
        ]
    ];
}

