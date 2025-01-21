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
        Schema::create('penalities', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('sale_id')->unique();
            $table->foreign('sale_id')->references('id')->on('sales')->onDelete('cascade');
            $table->uuid('insurance_id')->unique();
            $table->foreign('insurance_id')->references('id')->on('insurances')->onDelete('cascade');
            $table->uuid('remaining_sale_id')->unique();
            $table->foreign('remaining_sale_id')->references('id')->on('remaining_sales')->onDelete('cascade');
            $table->uuid('maintenance_deposit_id')->nullable();
            $table->foreign('maintenance_deposit_id')->references('id')->on('maintenance_deposits')->onDelete('cascade');
            $table->decimal('amount', 10, 2)->nullable();
            $table->date('date')->nullable();
            $table->text('reason')->nullable();
            $table->boolean('status')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penalities');
    }
};
