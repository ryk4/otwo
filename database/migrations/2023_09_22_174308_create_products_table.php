<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->boolean('is_active')->default(true);
            $table->string('name');
            $table->text('description')->nullable();
            $table->text('type');
            $table->integer('price_including_vat');
            $table->integer('price_excluding_vat')->nullable();
            $table->integer('discount_amount')->nullable();
            $table->integer('discount_percentage')->nullable();
            $table->string('stripe_product_id')->nullable();
            $table->string('paypal_product_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
