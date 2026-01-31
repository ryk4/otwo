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
        Schema::create('quiz_entries', function (Blueprint $table) {
            $table->id();
            $table->uuid()->unique();
            $table->string('type');
            $table->string('status');
            $table->string('email')->nullable();
            $table->string('ip_address')->nullable();
            $table->json('selections')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quiz_entries');
    }
};
