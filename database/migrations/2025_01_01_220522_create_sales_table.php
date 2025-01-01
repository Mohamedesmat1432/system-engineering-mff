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
        Schema::create('sales', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('customer_id')->constrained('customers');
            $table->foreignId('shop_id')->constrained('shops');
            $table->string('payment_method')->nullable();
            $table->decimal('insurance_amount', 10, 2)->nullable();
            $table->date('insurance_date')->nullable();
            $table->decimal('remaining_sale_amount', 10, 2)->nullable();
            $table->date('remaining_sale_date')->nullable();
            $table->decimal('maintenance_deposit_amount', 10, 2)->nullable();
            $table->date('maintenance_deposit_date')->nullable();
            $table->decimal('afine_amount', 10, 2)->nullable();
            $table->date('afine_date')->nullable();            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sales');
    }
};
