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
        Schema::create('data_shop_damietta_onlies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('government_id')->nullable();
            $table->date('auction_date')->nullable();
            $table->foreignId('city_id')->nullable();
            $table->string('center')->nullable();
            $table->string('location')->nullable();
            $table->string('building_number')->nullable();
            $table->string('building_entrance_number')->nullable();
            $table->string('shop_number')->nullable();
            $table->string('type_of_shop')->nullable();
            $table->string('shop_area')->nullable();
            $table->string('buyer_name')->nullable();
            $table->string('national_number')->nullable();
            $table->string('count_of_national_number')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('home_number')->nullable();
            $table->decimal('sell_price', 10, 2)->nullable();
            $table->decimal('sell_price_for_meter', 10, 2)->nullable();
            $table->string('payment_method')->nullable();
            $table->decimal('insurance_amount', 10, 2)->nullable();
            $table->date('insurance_date')->nullable();
            $table->decimal('remaining_sale_amount', 10, 2)->nullable();
            $table->date('remaining_sale_date')->nullable();
            $table->decimal('maintenance_deposit_amount', 10, 2)->nullable();
            $table->date('maintenance_deposit_date')->nullable();
            $table->decimal('afine_amount', 10, 2)->nullable();
            $table->date('afine_date')->nullable();
            $table->decimal('installment_amount_1', 10, 2)->nullable();
            $table->date('installment_date_1')->nullable();
            $table->decimal('installment_amount_2', 10, 2)->nullable();
            $table->date('installment_date_2')->nullable();
            $table->decimal('installment_amount_3', 10, 2)->nullable();
            $table->date('installment_date_3')->nullable();
            $table->decimal('installment_amount_4', 10, 2)->nullable();
            $table->date('installment_date_4')->nullable();
            $table->decimal('installment_amount_5', 10, 2)->nullable();
            $table->date('installment_date_5')->nullable();
            $table->decimal('installment_amount_6', 10, 2)->nullable();
            $table->date('installment_date_6')->nullable();
            $table->decimal('installment_amount_7', 10, 2)->nullable();
            $table->date('installment_date_7')->nullable();
            $table->decimal('installment_amount_8', 10, 2)->nullable();
            $table->date('installment_date_8')->nullable();
            $table->decimal('installment_amount_9', 10, 2)->nullable();
            $table->date('installment_date_9')->nullable();
            $table->decimal('installment_amount_10', 10, 2)->nullable();
            $table->date('installment_date_10')->nullable();
            $table->decimal('installment_amount_11', 10, 2)->nullable();
            $table->date('installment_date_11')->nullable();
            $table->decimal('installment_amount_12', 10, 2)->nullable();
            $table->date('installment_date_12')->nullable();
            $table->decimal('installment_amount_13', 10, 2)->nullable();
            $table->date('installment_date_13')->nullable();
            $table->decimal('installment_amount_14', 10, 2)->nullable();
            $table->date('installment_date_14')->nullable();
            $table->decimal('installment_amount_15', 10, 2)->nullable();
            $table->date('installment_date_15')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_shop_damietta_onlies');
    }
};
