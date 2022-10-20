<?php

use App\Models\User;

if (! function_exists('channel_separator')) {
    function channel_separator()
    {
        $payment_methods = \App\Models\PaymentMethod::where('is_active', 1)->get();
        $channels = collect($payment_methods)->map(function ($payment_method) {
           return $payment_method->channel;
        })->toArray();

        return implode(",", $channels);
    }
}

if (! function_exists('currency_format')) {
    /**
     * Formatting Currency
     *
     * @param int $amount The amount to be formatted
     *
     * @return mixed
     */
    function currency_format($amount)
    {
        return 'Rp ' . number_format((float)$amount, 2, ',', '.');
    }
}

if (! function_exists('icon_payment_method')) {
    function icon_payment_method(\App\Models\PaymentMethod $paymentMethod)
    {
        $channel = strtolower($paymentMethod->channel);
        return asset("images/icon-bank-$channel.png");
    }
}

if (! function_exists('filament_get_setting')) {
    function filament_get_setting(string $key = '')
    {
        try {
            return \App\Models\Setting::where('key', $key)->firstOrFail()->value;
        } catch (Exception $exception) {
            return '';
        }
    }
}

if (! function_exists('current_user')) {
    /**
     * Get Current Login user
     *
     * @param string $attribute
     *
     * @return User|\Illuminate\Contracts\Auth\Authenticatable|bool|null
     */
    function current_user($attribute = '')
    {
        if (! auth()->check()) {
            return false;
        }

        return (empty($attribute)) ? auth()->user() : auth()->user()->getAttribute($attribute);
    }
}

if (! function_exists('url_exists')) {
    function url_exists($url = '')
    {
        try {
            if($url == ''){ return false; }

            $headers = get_headers($url, 1);
            if(\Illuminate\Support\Arr::get($headers,'Content-Type') == 'image/jpeg') {
                return true;
            }

            if(\Illuminate\Support\Arr::get($headers,'content-type') == 'image/jpeg') {
                return true;
            }

             return false;
        } catch (Exception $exception) {
            return false;
        }

    }
}



