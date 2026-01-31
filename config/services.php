<?php

return [

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
        'scheme' => 'https',
    ],

    'stripe' => [
        'public_key' => env('STRIPE_PUBLIC_KEY'),
        'secret_key' => env('STRIPE_SECRET_KEY'),
        'webhook' => [
            'secret' => env('STRIPE_WEBHOOK_SECRET'),
            'tolerance' => env('STRIPE_WEBHOOK_TOLERANCE', 300),
        ],
    ],

    'paypal' => [
        'base_url' => env('PAYPAL_BASE_URL', 'https://api-m.paypal.com'),
        'client_key' => env('PAYPAL_CLIENT_ID'),
        'secret_key' => env('PAYPAL_SECRET_ID'),
    ],

    'mailerlite' => [
        'base_url' => env('MAILERLITE_BASE_URL', 'https://connect.mailerlite.com'),
        'bearer_token' => env('MAILERLITE_BEARER_TOKEN'),
        'groups' => [
            'subscribed' => '101860524500714941',
            'purchased' => '101860530569872869',
        ],
    ],

    'googleExcel' => [
        'spreadSheetId' => '1XDWAvdw546GrNdiCxQGb6gBRnPF-hnaAkyDguZMV-VM',
    ],

    'facebook' => [
        'base_url' => 'https://graph.facebook.com/v22.0',
        'bearer_token' => env('FACEBOOK_BEARER_TOKEN'),
        'pixel_id' => env('FACEBOOK_PIXEL_ID'),
    ]

];
