<?php

namespace App\Validator;

use Illuminate\Http\Request;
use Spatie\WebhookClient\SignatureValidator\SignatureValidator;
use Spatie\WebhookClient\WebhookConfig;

class WinpayWebhookSignatureValidator implements SignatureValidator
{
    public function isValid(Request $request, WebhookConfig $config): bool
    {
        if(! in_array($request->header('x-forwarded-for'), explode(',', $config->signingSecret))) {
            return false;
        }

        return true;
    }
}
