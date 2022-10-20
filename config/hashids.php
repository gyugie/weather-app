<?php

/**
 * Copyright (c) Vincent Klaiber.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @see https://github.com/vinkla/laravel-hashids
 */

return [

    /*
    |--------------------------------------------------------------------------
    | Default Connection Name
    |--------------------------------------------------------------------------
    |
    | Here you may specify which of the connections below you wish to use as
    | your default connection for all work. Of course, you may use many
    | connections at once using the manager class.
    |
    */

    'default' => 'main',

    /*
    |--------------------------------------------------------------------------
    | Hashids Connections
    |--------------------------------------------------------------------------
    |
    | Here are each of the connections setup for your application. Example
    | configuration has been included, but you may add as many connections as
    | you would like.
    |
    */

    'connections' => [
        'user' => [
            'salt' => '6EB4EF3D1E29FFE55D35CCB4CD3E6IAUJSHK',
            'length' => '6',
        ],
        'transaction' => [
            'salt' => '4886A65A0ABBB47D9B697AAD7F3F1F14CC60341728848D7275C02788AC793B2E',
            'length' => '20',
        ],
        'merchant' => [
            'salt' => 'C77DE36326AA63B3F920AECAEB97062A96C27CFCC7CE36AAFAD3590B2DFD0B50',
            'length' => '6',
        ],
        'customer' => [
            'salt' => '06DDA8BC386915E5BCE9AE312EE1375029DD7F3CEE9E16893D25175ED8906B60',
            'length' => '6',
        ],
        'webhook_history' => [
            'salt' => '35F5A772F49D20982FE56A786BA2A5F8E3317E49492A2BE5406F7B0752D71A6B',
            'length' => '6',
        ],
        'main' => [
            'salt' => '6EB4EF3D1E29FFE55D35CCB4CD3E6',
            'length' => '12',
        ],
        'payment_method' => [
            'salt' => '738C9E17CD9P1FAYQMWETULDKDUYQ',
            'length' => '11',
        ],
        'product' => [
            'salt' => '06DDA8BC386915E5BCE9AE312EE1375029DD7F3CEE9E16893D25175E97BHSN2245',
            'length' => '6'
        ]
    ],

];
