<?php

namespace App\Models;

use App\Casts\Price;
use App\Enums\ProductCategoryType;
use App\Enums\ProductType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'is_active',
        'name',
        'description',
        'type',
        'price_including_vat',
        'price_excluding_vat',
        'discount_amount',
        'discount_percentage',
        'stripe_product_id',
        'paypal_product_id',
    ];

    protected function casts(): array
    {
        return [
            'is_active' => 'boolean',
            'type' => ProductType::class,
            'price_including_vat' => Price::class,
            'price_excluding_vat' => Price::class,
            'discount_amount' => Price::class,
            'category_type' => ProductCategoryType::class,
        ];
    }

    public function getPriceWithDiscount(): string
    {
        return number_format($this->price_including_vat - $this->discount_amount, 2);
    }

    public function getPriceWithDiscountFloat(): float
    {
        return round($this->price_including_vat - $this->discount_amount, 2);
    }
}
