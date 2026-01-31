<?php

namespace App\Services\Providers\Paypal;

class PaypalBaseService
{
    public function getBearerToken(): string
    {
        $public_key = config('services.paypal.client_key');
        $secret_key = config('services.paypal.secret_key');

        $url = config('services.paypal.base_url').'/v1/oauth2/token';
        $data = 'grant_type=client_credentials';

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_USERPWD, $public_key.':'.$secret_key);

        $response = curl_exec($ch);

        curl_close($ch);

        return json_decode($response)->access_token;
    }
}
