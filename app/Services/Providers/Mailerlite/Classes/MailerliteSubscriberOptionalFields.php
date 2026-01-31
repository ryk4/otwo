<?php

namespace App\Services\Providers\Mailerlite\Classes;

class MailerliteSubscriberOptionalFields
{
    public string $name;

    public string $last_name;

    public string $company;

    public string $country;

    public string $city;

    public string $phone;

    public string $state;

    public string $z_i_p;

    public string $summary_url;

    public string $meditations_url;

    public string $priority_url;

    public string $user_area_url;

    public string $average_spending_amount;

    public string $locale_language;

    public int $priority;

    public int $meditations;

    public function __construct() {}
}
