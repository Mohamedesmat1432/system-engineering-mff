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
            $table->bigIncrements('id');
            $table->foreignId('government_id')->nullable();
            $table->date('auction_date');
            $table->foreignId('city_id')->nullable();
            $table->string('center')->nullable();
            $table->string('location');
            $table->string('building_number');
            $table->string('building_entrance_number');
            $table->string('shop_number');
            $table->string('type_of_shop');
            $table->string('shop_area');
            $table->string('buyer_name');
            $table->string('national_number');
            $table->string('count_of_national_number');
            $table->string('phone_number');
            $table->string('home_number')->nullable();
            $table->decimal('sell_price',10,2);
            $table->decimal('sell_price_for_meter',10,2);
            $table->string('payment_method');
            $table->json('insurance')->nullable();  
            $table->json('remaining_sale')->nullable();  
            $table->json('maintenance_deposit')->nullable();  
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
