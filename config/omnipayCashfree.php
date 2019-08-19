<?php
return [
    'components' => [
        'omnipay' => [
            'defaultGateway' => 'cashfree',
            'gateways' => [
                'cashfree' => [
                    'driverName' => 'Cashfree',
                    'config' => [
                        ''
                    ],
                ],
            ],
        ],
    ],
];
