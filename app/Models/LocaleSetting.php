<?php

namespace App\Models;

use App\Enums\CurrencyType;
use App\Enums\LanguageType;
use App\Enums\VersionType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class LocaleSetting extends Model
{
    public const LOCALE_SETTING_CACHE = 'locale';

    protected $fillable = [
        'name',
        'code',
        'language',
        'currency_type',
        'version'
    ];

    protected function casts(): array
    {
        return [
            'language' => LanguageType::class,
            'currency_type' => CurrencyType::class,
            'version' => VersionType::class
        ];
    }

    public function products(): BelongsToMany
    {
        return $this->belongsToMany(Product::class)
            ->using(LocaleSettingProduct::class)
            ->withPivot(
                'price_including_vat',
                'price_excluding_vat',
                'discount_amount',
                'stripe_product_id',
                'paypal_product_id'
            );
    }
}
