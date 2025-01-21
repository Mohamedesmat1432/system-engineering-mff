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
        Schema::create('shops', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('shop_code')->nullable();
            $table->date('auction_date')->nullable();
            $table->uuid('company_id')->nullable();
            $table->foreign('company_id')->references('id')->on('companies')->onDelete('cascade');
            $table->uuid('government_id')->nullable();
            $table->foreign('government_id')->references('id')->on('governments')->onDelete('cascade');
            $table->uuid('city_id')->nullable();
            $table->foreign('city_id')->references('id')->on('cities')->onDelete('cascade');
            $table->string('center')->nullable();
            $table->string('location')->nullable();
            $table->string('building_number')->nullable();
            $table->string('building_entrance_number')->nullable();
            $table->string('shop_number')->nullable();
            $table->string('type_of_shop')->nullable();
            $table->string('shop_area')->nullable();
            $table->decimal('sell_price', 10, 2)->nullable();
            $table->decimal('sell_price_for_meter', 10, 2)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shops');
    }
};
