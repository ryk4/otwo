<?php

namespace App\Enums;

enum QuizStatusType: string
{
    use EnumTrait;

    case STARTED = 'started';
    case SUBSCRIBED = 'subscribed';
    case PAID = 'paid';
    case BOOK_DELIVERED = 'book_delivered';
    case CANCELLED = 'cancelled';

    public function title(): string
    {
        return match ($this) {
            self::STARTED => __("Started"),
            self::SUBSCRIBED => __("Subscribed"),
            self::PAID => __("Paid"),
            self::CANCELLED => __("Cancelled"),
            self::BOOK_DELIVERED => __("Book delivered"),
        };
    }
}
