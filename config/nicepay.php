<?php

return [
    'url' => env('NICEPAY_URL', 'https://dev.nicepay.co.id/'),
    'merchant_name' => env('NICEPAY_MERCHANT', 'IONPAYTEST'),
    'imid' => env('NICEPAY_IMID', 'IONPAYTEST'),
    'key' => env('NICEPAY_KEY', '33F49GnCMS1mFYlGXisbUDzVf2ATWCl9k3R++d5hDd3Frmuos/XLx8XhXpe+LDYAbpGKZYSwtlyyLOtS/8aD7A=='),
    'whitelist_ip' => ["103.20.51", "103.117.8"],
    'payment_methods' => [
        [
            'name' => 'Virtual Account Mandiri',
            'vendor' => 'nicepay',
            'channel' => 'va_mandiri',
            'is_unique' => false,
            'is_active' => false,
            'is_percent_payment_fee' => false,
            'payment_fee' => 2500,
            'payment_vat_fee' => 275,
            'expired_duration' => 1440,
            'meta' => [
                'bank_type' => 'BMRI',
                'payment_method_code' => "02"
            ],
        ],[
            'name' => 'Virtual Account International Indonesia Maybank',
            'vendor' => 'nicepay',
            'channel' => 'va_maybank',
            'is_unique' => false,
            'is_active' => false,
            'is_percent_payment_fee' => false,
            'payment_fee' => 2500,
            'payment_vat_fee' => 275,
            'expired_duration' => 1440,
            'meta' => [
                'bank_type' => 'IBBK',
                'payment_method_code' => "02"
            ],
        ],[
            'name' => 'Virtual Account Permata',
            'vendor' => 'nicepay',
            'channel' => 'va_permata',
            'is_unique' => false,
            'is_active' => false,
            'is_percent_payment_fee' => false,
            'payment_fee' => 2500,
            'payment_vat_fee' => 275,
            'expired_duration' => 1440,
            'meta' => [
                'bank_type' => 'BBBA',
                'payment_method_code' => "02"
            ],
        ],[
            'name' => 'Virtual Account Permata Syariah',
            'vendor' => 'nicepay',
            'channel' => 'va_permata_syariah',
            'is_unique' => false,
            'is_active' => false,
            'is_percent_payment_fee' => false,
            'payment_fee' => 2500,
            'payment_vat_fee' => 275,
            'expired_duration' => 1440,
            'meta' => [
                'bank_type' => 'BBBB',
                'payment_method_code' => "02"
            ],
        ],[
            'name' => 'Virtual Account BCA',
            'vendor' => 'nicepay',
            'channel' => 'va_bca',
            'is_unique' => false,
            'is_active' => false,
            'is_percent_payment_fee' => false,
            'payment_fee' => 2500,
            'payment_vat_fee' => 275,
            'expired_duration' => 1440,
            'meta' => [
                'bank_type' => 'CENA',
                'payment_method_code' => "02"
            ],
        ],[
            'name' => 'Virtual Account Negara Indonesia',
            'vendor' => 'nicepay',
            'channel' => 'va_bni',
            'is_unique' => false,
            'is_active' => false,
            'is_percent_payment_fee' => false,
            'payment_fee' => 2500,
            'payment_vat_fee' => 275,
            'expired_duration' => 1440,
            'meta' => [
                'bank_type' => 'BNIN',
                'payment_method_code' => "02"
            ],
        ],[
            'name' => 'Virtual Account BRI',
            'vendor' => 'nicepay',
            'channel' => 'va_bri',
            'is_unique' => false,
            'is_active' => false,
            'is_percent_payment_fee' => false,
            'payment_fee' => 2500,
            'payment_vat_fee' => 275,
            'expired_duration' => 1440,
            'meta' => [
                'bank_type' => 'BRIN',
                'payment_method_code' => "02"
            ],
        ],[
            'name' => 'Virtual Account CIMB NIAGA',
            'vendor' => 'nicepay',
            'channel' => 'va_cimb_niaga',
            'is_unique' => false,
            'is_active' => false,
            'is_percent_payment_fee' => false,
            'payment_fee' => 2500,
            'payment_vat_fee' => 275,
            'expired_duration' => 1440,
            'meta' => [
                'bank_type' => 'BNIA',
                'payment_method_code' => "02"
            ],
        ],[
            'name' => 'Virtual Account DANAMON INDONESIA',
            'vendor' => 'nicepay',
            'channel' => 'va_danamon',
            'is_unique' => false,
            'is_active' => false,
            'is_percent_payment_fee' => false,
            'payment_fee' => 2500,
            'payment_vat_fee' => 275,
            'expired_duration' => 1440,
            'meta' => [
                'bank_type' => 'BDIN',
                'payment_method_code' => "02"
            ],
        ],[
            'name' => 'E-Wallet OVO',
            'vendor' => 'nicepay',
            'channel' => 'ewallet_ovo',
            'is_unique' => false,
            'is_active' => false,
            'is_percent_payment_fee' => false,
            'payment_fee' => 2500,
            'payment_vat_fee' => 275,
            'expired_duration' => 1440,
            'meta' => [
                'bank_type' => 'OVOE',
                'payment_method_code' => "05"
            ],
        ],
//        [
//            'name' => 'CVS Alfamart',
//            'vendor' => 'nicepay',
//            'channel' => 'convenience_store_alfamart',
//            'is_unique' => false,
//            'is_active' => false,
//            'is_percent_payment_fee' => false,
//            'payment_fee' => 2500,
//            'payment_vat_fee' => 275,
//            'expired_duration' => 1440,
//            'meta' => [
//                'bank_type' => 'ALMA',
//                'payment_method_code' => "03"
//            ],
//        ],[
//            'name' => 'CVS Indomart',
//            'vendor' => 'nicepay',
//            'channel' => 'convenience_store_indomart',
//            'is_unique' => false,
//            'is_active' => false,
//            'is_percent_payment_fee' => false,
//            'payment_fee' => 2500,
//            'payment_vat_fee' => 275,
//            'expired_duration' => 1440,
//            'meta' => [
//                'bank_type' => 'INDO',
//                'payment_method_code' => "03"
//            ],
//        ],[
//            'name' => 'E-Wallet Link Aja',
//            'vendor' => 'nicepay',
//            'channel' => 'ewallet_linkaja',
//            'is_unique' => false,
//            'is_active' => false,
//            'is_percent_payment_fee' => false,
//            'payment_fee' => 2500,
//            'payment_vat_fee' => 275,
//            'expired_duration' => 1440,
//            'meta' => [
//                'bank_type' => 'LINK',
//                'payment_method_code' => "05"
//            ],
//        ],[
//            'name' => 'E-Wallet DANA',
//            'vendor' => 'nicepay',
//            'channel' => 'ewallet_dana',
//            'is_unique' => false,
//            'is_active' => false,
//            'is_percent_payment_fee' => false,
//            'payment_fee' => 2500,
//            'payment_vat_fee' => 275,
//            'expired_duration' => 1440,
//            'meta' => [
//                'bank_type' => 'DANA',
//                'payment_method_code' => "05"
//            ],
//        ],[
//            'name' => 'E-Wallet Shopeepay',
//            'vendor' => 'nicepay',
//            'channel' => 'ewallet_shopeepay',
//            'is_unique' => false,
//            'is_active' => false,
//            'is_percent_payment_fee' => false,
//            'payment_fee' => 2500,
//            'payment_vat_fee' => 275,
//            'expired_duration' => 1440,
//            'meta' => [
//                'bank_type' => 'ESHP',
//                'payment_method_code' => "05"
//            ],
//        ],[
//            'name' => 'QRIS ShopeePay',
//            'vendor' => 'nicepay',
//            'channel' => 'ewallet_shopeepay',
//            'is_unique' => false,
//            'is_active' => false,
//            'is_percent_payment_fee' => false,
//            'payment_fee' => 2500,
//            'payment_vat_fee' => 275,
//            'expired_duration' => 1440,
//            'meta' => [
//                'bank_type' => 'QSHP',
//                'payment_method_code' => "00"
//            ],
//        ],[
//            'name' => 'Clickpay Jenius',
//            'vendor' => 'nicepay',
//            'channel' => 'instant_jenius',
//            'is_unique' => false,
//            'is_active' => false,
//            'is_percent_payment_fee' => false,
//            'payment_fee' => 2500,
//            'payment_vat_fee' => 275,
//            'expired_duration' => 1440,
//            'meta' => [
//                'bank_type' => 'JENC',
//                'payment_method_code' => "04"
//            ],
//        ],[
//            'name' => 'Clickpay BCA',
//            'vendor' => 'nicepay',
//            'channel' => 'instant_bca',
//            'is_unique' => false,
//            'is_active' => false,
//            'is_percent_payment_fee' => false,
//            'payment_fee' => 2500,
//            'payment_vat_fee' => 275,
//            'expired_duration' => 1440,
//            'meta' => [
//                'bank_type' => 'BCAC',
//                'payment_method_code' => "04"
//            ],
//        ],[
//            'name' => 'Clickpay CIMB',
//            'vendor' => 'nicepay',
//            'channel' => 'instant_cimb',
//            'is_unique' => false,
//            'is_active' => false,
//            'is_percent_payment_fee' => false,
//            'payment_fee' => 2500,
//            'payment_vat_fee' => 275,
//            'expired_duration' => 1440,
//            'meta' => [
//                'bank_type' => 'CIMC',
//                'payment_method_code' => "04"
//            ],
//        ],[
//            'name' => 'Clickpay Mandiri ',
//            'vendor' => 'nicepay',
//            'channel' => 'instant_mandiri',
//            'is_unique' => false,
//            'is_active' => false,
//            'is_percent_payment_fee' => false,
//            'payment_fee' => 2500,
//            'payment_vat_fee' => 275,
//            'expired_duration' => 1440,
//            'meta' => [
//                'bank_type' => 'MDRC',
//                'payment_method_code' => "04"
//            ],
//        ]
//        [
//        'name' => 'Virtual Account ALTO',
//        'vendor' => 'nicepay',
//        'channel' => 'va_alto',
//        'is_unique' => false,
//        'is_active' => false,
//        'is_percent_payment_fee' => false,
//        'payment_fee' => 2500,
//            'payment_vat_fee' => 275,
//        'expired_duration' => 1440,
//        'meta' => [
//            'bank_type' => 'OTHR',
//            'payment_method_code' => "02"
//        ],
//    ],
//        [
//        'name' => 'Virtual Account Prima',
//        'vendor' => 'nicepay',
//        'channel' => 'va_prima',
//        'is_unique' => false,
//        'is_active' => false,
//        'is_percent_payment_fee' => false,
//        'payment_fee' => 2500,
//            'payment_vat_fee' => 275,
//        'expired_duration' => 1440,
//        'meta' => [
//            'bank_type' => 'OTHR',
//            'payment_method_code' => "02"
//        ],
//    ],
//        [
//            'name' => 'Virtual Account Link Aja',
//            'vendor' => 'nicepay',
//            'channel' => 'va_link',
//            'is_unique' => false,
//            'is_active' => false,
//            'is_percent_payment_fee' => false,
//            'payment_fee' => 2500,
//            'payment_vat_fee' => 275,
//            'expired_duration' => 1440,
//            'meta' => [
//                'bank_type' => 'LINK',
//                'payment_method_code' => "02"
//            ],
//        ],
//        [
//            'name' => 'Virtual Account BJB',
//            'vendor' => 'nicepay',
//            'channel' => 'va_bjb',
//            'is_unique' => false,
//            'is_active' => false,
//            'is_percent_payment_fee' => false,
//            'payment_fee' => 2500,
//            'payment_vat_fee' => 275,
//            'expired_duration' => 1440,
//            'meta' => [
//                'bank_type' => 'PDJB',
//                'payment_method_code' => "02"
//            ],
//        ],
//        [
//            'name' => 'Virtual Account ATM Bersama',
//            'vendor' => 'nicepay',
//            'channel' => 'va_atm_bersama',
//            'is_unique' => false,
//            'is_active' => false,
//            'is_percent_payment_fee' => false,
//            'payment_fee' => 2500,
//            'payment_vat_fee' => 275,
//            'expired_duration' => 1440,
//            'meta' => [
//                'bank_type' => 'OTHR',
//                'payment_method_code' => "02"
//            ],
//        ],
    ]
];
