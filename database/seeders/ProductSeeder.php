<?php

namespace Database\Seeders;

use App\Enums\ProductType;
use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'id' => 1,
            'is_active' => false,
            'name' => 'OTWO paperback',
            'type' => ProductType::paperback,
            'price_including_vat' => 69.99,
            'discount_amount' => 10.00,
        ]);

        Product::create([
            'id' => 2,
            'is_active' => true,
            'name' => 'OTWO e-book',
            'type' => ProductType::e_book,
            'price_including_vat' => 54.99,
            'discount_amount' => 20.00,
            'stripe_product_id' => 'price_1NtQ9iESnwkYo5AKoTTdd0hj',
        ]);

        Product::create([
            'id' => 3,
            'is_active' => false,
            'name' => 'OTWO audiobook',
            'type' => ProductType::audiobook,
            'price_including_vat' => 69.99,
            'discount_amount' => 10.00,
        ]);
    }
}
