<?php

namespace App\Casts;

use Illuminate\Contracts\Database\Eloquent\CastsAttributes;

class Price implements CastsAttributes
{
    public function get($model, string $key, $value, array $attributes): ?string
    {
        return $value === null ? null : number_format($value / 100, 2, '.', '');
    }

    public function set($model, string $key, $value, array $attributes): ?int
    {
        //MUST round float, otherwise PHP will ignore the brackets and cast to int before performing multiplication.
        return $value === null ? null : (int) round(($value * 100), 0);
    }
}
