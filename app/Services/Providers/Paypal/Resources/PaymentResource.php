<?php

namespace App\Services\Providers\Paypal\Resources;

use App\Services\Providers\Paypal\PaypalService;
use Illuminate\Http\Client\Response;

class PaymentResource
{
    public function __construct(
        private readonly PaypalService $service,
    ) {}

    public function checkout(float|int $amount, string $currency_code = 'USD'): Response
    {
        return $this->service->post(
            request: $this->service->buildRequestWithToken(),
            url: '/v2/checkout/orders',
            payload: [
                'purchase_units' => [
                    [
                        'amount' => [
                            'currency_code' => $currency_code,
                            'value' => (string) $amount,
                        ],
                    ],
                ],
                'intent' => 'CAPTURE',
            ]
        );
    }

    /*
     * Due to the nature of the Paypal API, we need to send a POST request using curl
     */
    public function capture(string $orderId)
    {
        $accessToken = $this->service->getBearerToken();
        $url = config('services.paypal.base_url').'/v2/checkout/orders/'.$orderId.'/capture';

        $headers = [
            'Content-Type: application/json',
            'Authorization: Bearer '.$accessToken,
        ];

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, '');
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($ch);

        return $response;
    }
}
