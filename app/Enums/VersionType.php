<?php

namespace App\Enums;

enum VersionType: int
{
    use EnumTrait;

    case VERSION_1 = 1;
    case VERSION_2 = 2;

    public function title(): string
    {
        return match ($this) {
            self::VERSION_1 => __("V1"),
            self::VERSION_2 => __("V2"),
        };
    }
}
