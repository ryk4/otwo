<?php

namespace App\Enums;

enum ProductCategoryType: string
{
    use EnumTrait;

    case MAIN_PRODUCT = 'main_product';
    case ADDON_PRIORITY = 'addon_priority';
    case ADDON_MEDITATION = 'addon_meditation';

    public function title(): string
    {
        return match ($this) {
            self::MAIN_PRODUCT => 'Main product',
            self::ADDON_PRIORITY => 'Addon priority',
            self::ADDON_MEDITATION => 'Addon meditation',
        };
    }
}
