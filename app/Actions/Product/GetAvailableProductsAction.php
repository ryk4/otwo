<?php

namespace App\Actions\Product;

use App\Actions\LocaleSetting\GetLocaleSettingAction;
use App\Enums\ProductCategoryType;
use App\Enums\ProductType;
use App\Models\Product;
use Illuminate\Support\Collection;

class GetAvailableProductsAction
{
    public function __construct(
        protected GetLocaleSettingAction $getLocaleSettingAction
    ) {
    }

    public function handle(bool $includeNonMainProducts = false): Collection
    {
        $localeSetting = $this->getLocaleSettingAction->handle();

        $products = Product::query()
            ->when($includeNonMainProducts === false, fn($query) => $query->where('category_type', '=', ProductCategoryType::MAIN_PRODUCT)->where('type', '=', ProductType::e_book))
            ->get()
            ->map(function (Product $product) {
                $product->price_with_discount_readable = $product->getPriceWithDiscount();
                $product->price_with_discount = $product->getPriceWithDiscountFloat();

                return $product;
            });

        if ($localeSetting === null) {
            return $products;
        }

        return $products->map(function ($product) use ($localeSetting) {
            $localeSettingProduct = $localeSetting->products()
                ->firstWhere('product_id', $product->id);

            if ($localeSettingProduct !== null) {
                $product->price_including_vat = $localeSettingProduct->pivot->price_including_vat;
                $product->price_excluding_vat = $localeSettingProduct->pivot->price_excluding_vat;
                $product->discount_amount = $localeSettingProduct->pivot->discount_amount;
            }

            $product->price_with_discount_readable = $product->getPriceWithDiscount();
            $product->price_with_discount = $product->getPriceWithDiscountFloat();
            $product->discount_percentage = round(100 - (($product->price_with_discount / $product->price_including_vat) * 100));

            return $product;
        });
    }
}
