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
        Schema::create('data_shop_outside_damiettas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('government_id')->nullable();
            $table->date('auction_date');
            $table->foreignId('city_id')->nullable();
            $table->string('location');
            $table->string('building_number');
            $table->string('building_entrance_number');
            $table->string('shop_number');
            $table->string('type_of_shop');
            $table->string('buyer_name');
            $table->string('national_number')->unique();
            $table->string('count_of_national_number');
            $table->string('phone_number');
            $table->string('home_number')->nullable();
            $table->decimal('sell_price');
            $table->decimal('sell_price_for_meter');
            $table->string('payment_method')->nullable();
            $table->decimal('insurance_amount', 2)->nullable();
            $table->date('insurance_date')->nullable();
            $table->decimal('remaining_sale_amount', 2)->nullable();
            $table->date('remaining_sale_date')->nullable();
            $table->decimal('maintenance_deposit_amount',2)->nullable();
            $table->date('maintenance_deposit_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_stores_outside_damiettas');
    }
};
