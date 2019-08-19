<?php

/* @var $params array */

return [
    'components' => [
        'omnipay' => [
            'defaultGateway' => 'cashfree',
            'gateways' => [
                'cashfree' => [
                    'driverName' => 'Cashfree',
                    'parameters' => [
                        'appId' => $params['cashfree.appId'],
                        'secretKey' => $params['cashfree.secretKey'],
                    ],
                ],
            ],
        ],
    ],
];
