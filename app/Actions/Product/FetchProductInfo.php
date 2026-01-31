<?php

namespace App\Actions\Product;

use App\Actions\LocaleSetting\GetLocaleSettingAction;
use App\Models\Product;

class FetchProductInfo
{
    public function __construct()
    {
    }

    public function handle(string $id, ?string $locale = null): ?Product
    {
        $product = Product::find($id);

        $localeSetting = app(GetLocaleSettingAction::class)->handle($locale);

        $localeSettingProduct = $localeSetting?->products()
            ->firstWhere('product_id', $product->id);

        if ($localeSettingProduct === null) {
            return null;
        }

        $product->price_including_vat = $localeSettingProduct->pivot->price_including_vat;
        $product->price_excluding_vat = $localeSettingProduct->pivot->price_excluding_vat;
        $product->discount_amount = $localeSettingProduct->pivot->discount_amount;
        $product->stripe_product_id = $localeSettingProduct->pivot->stripe_product_id;

        $product->price_with_discount = $product->getPriceWithDiscountFloat();
        $product->price_with_discount_readable = $product->getPriceWithDiscount();

        return $product;
    }
}
