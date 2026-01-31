<?php

namespace App\Enums;

enum ProductType: string
{
    use EnumTrait;

    case e_book = 'e_book';
    case audiobook = 'audiobook';
    case paperback = 'paperback';

    public function title(): string
    {
        return match ($this) {
            self::e_book => __("Personal quit plan"),
            self::audiobook => 'Audiobook',
            self::paperback => 'Paperback',
        };
    }
}
