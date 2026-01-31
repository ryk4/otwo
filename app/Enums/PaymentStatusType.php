<?php

namespace App\Enums;

enum PaymentStatusType: string
{
    use EnumTrait;

    case started = 'started';
    case waiting_for_bank_confirmation = 'waiting_for_bank_confirmation';
    case cancelled = 'cancelled';
    case failed = 'failed';
    case successful = 'successful';

    public function title(): string
    {
        return match ($this) {
            self::started => __("Started"),
            self::waiting_for_bank_confirmation => __("Waiting for bank confirmation"),
            self::cancelled => __("Cancelled"),
            self::failed => __("Failed"),
            self::successful => __("Successful"),
        };
    }
}
