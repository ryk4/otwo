<?php

namespace App\Models;

use App\Enums\PaymentStatusType;
use App\Enums\PaymentType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Payment extends Model
{
    protected $guarded = [];

    protected function casts(): array
    {
        return [
            'type' => PaymentType::class,
            'status' => PaymentStatusType::class,
            'response_from_provider' => 'json',
        ];
    }

    public function getPriceWithDiscount(): float
    {
        $revenue = 0;

        $localeSetting = LocaleSetting::firstWhere('language', $this->quizEntry->language);

        $price = $localeSetting->products()
            ->where('product_id', $this->product->id)
            ->first();

        if ($price === null) {
            $price = $this->product;
        } else {
            $price = $price->pivot;
        }

        $revenue += $price->price_including_vat - $price->discount_amount;

        return $revenue;
    }

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

    public function quizEntry(): BelongsTo
    {
        return $this->belongsTo(QuizEntry::class);
    }
}
