<?php

namespace Tests\Utils;

class PaymentUtils
{
    static $paymentOptionsStructure = [
        'data' => [
            [
                'type',
                'attributes' => [
                    'short_name',
                    'name',
                    'description',
                    'terms',
                    'fiat_provider_details' => [
                        [
                            'type',
                            'attributes' => [
                                'fee_fix',
                                'fee_percent',
                                'fee_max',
                                'fiat_id',
                                'vip_fee_percent_difference',
                                'savings_enabled'
                            ],
                            'id'
                        ]
                        ],
                    'unavailable',
                    'is_voucher',
                    'is_instant',
                    'enabled',
                    'savings_enabled'
                ]
            ]
        ]
    ];
}

