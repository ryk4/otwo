<?php

namespace App\Enums;

enum UserRoleType: string
{
    use EnumTrait;

    case normal = 'normal';
    case admin = 'admin';

    public function title(): string
    {
        return match ($this) {
            self::normal => 'Normal',
            self::admin => 'Admin',
        };
    }
}
