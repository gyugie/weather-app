<?php

return [
    'configs' => [
        [
            'name' => 'callback-vendor-winpay',
            'signing_secret' => env("WINPAY_SINGNATURE_SECRET", "121.52.93.18,139.255.112.229"),
            'signature_header_name' => '',
            'signature_validator' => \App\Validator\WinpayWebhookSignatureValidator::class,
            'webhook_profile' => \Spatie\WebhookClient\WebhookProfile\ProcessEverythingWebhookProfile::class,
            'webhook_response' => \App\Validator\WinpayWebhookResponse::class,
            'webhook_model' => \Spatie\WebhookClient\Models\WebhookCall::class,
            'process_webhook_job' => \App\Jobs\WinpayWebhookReceiverJob::class,
        ],
    ],
];
