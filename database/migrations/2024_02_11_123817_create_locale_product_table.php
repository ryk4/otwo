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
        Schema::create('locale_setting_product', function (Blueprint $table) {
            $table->foreignId('locale_setting_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->foreignId('product_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->integer('price_including_vat');
            $table->integer('price_excluding_vat')->nullable();
            $table->integer('discount_amount')->nullable();
            $table->string('stripe_product_id')->nullable();
            $table->string('paypal_product_id')->nullable();
            $table->timestamps();

            $table->primary(['locale_setting_id', 'product_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('locale_setting_product');
    }
};
