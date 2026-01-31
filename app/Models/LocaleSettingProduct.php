<?php

namespace App\Models;

use App\Casts\Price;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\Pivot;

class LocaleSettingProduct extends Pivot
{
    protected $fillable = [
        'locale_id',
        'product_id',
        'price_including_vat',
        'price_excluding_vat',
        'discount_amount',
        'stripe_product_id',
        'paypal_product_id',
    ];

    protected function casts(): array
    {
        return [
            'price_including_vat' => Price::class,
            'price_excluding_vat' => Price::class,
            'discount_amount' => Price::class,
        ];
    }

    public function locale(): BelongsTo
    {
        return $this->belongsTo(LocaleSetting::class);
    }

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}
