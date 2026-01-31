<?php

namespace App\Services\Providers\Facebook\Resources;

use FacebookAds\Api as FacebookApi;
use FacebookAds\Logger\CurlLogger;
use FacebookAds\Object\ServerSide\ActionSource;
use FacebookAds\Object\ServerSide\Event;
use FacebookAds\Object\ServerSide\EventRequest;
use FacebookAds\Object\ServerSide\UserData;
use Illuminate\Http\Client\PendingRequest;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Str;

class EventResource
{
    public function __construct(
        private readonly PendingRequest $client,
    ) {
    }

//    public function create(string $fbp, string $eventType, string $ipAddress, string $userAgent, ?string $email = null): Response
//    {
//        return $this->client->post('/events', [
//                'data' => [
//                    [
//                        'event_name' => $eventType,
//                        'event_time' => now()->timestamp,
//                        'user_data' => [
//                            'fbp' => $fbp,
//                            'client_ip_address' => $ipAddress,
//                            'client_user_agent' => $userAgent,
//                            'em' => $email === null ? null : [hash('sha256', Str::lower($email))]
//                        ],
//                    ],
//                ],
//            ]
//        );
//    }

    public function create(string $fbp, string $eventType, string $ipAddress, string $userAgent, ?string $email = null, ?string $fbc = null)
    {
        $api = FacebookApi::init(null, null, config('services.facebook.bearer_token'));
        $api->setLogger(new CurlLogger());

        $user_data = (new UserData())
            ->setEmails(array($email))
            ->setClientIpAddress($ipAddress)
            ->setClientUserAgent($userAgent)
            ->setFbp($fbp);

        if ($fbc !== null) {
            $user_data->setFbc($fbc);
        }

        $event = (new Event())
            ->setEventName($eventType)
            ->setEventTime(time())
            ->setUserData($user_data)
            ->setActionSource(ActionSource::WEBSITE);

        $request = (new EventRequest(config('services.facebook.pixel_id')))
            ->setEvents([$event]);

        return $request->execute();
    }
}
