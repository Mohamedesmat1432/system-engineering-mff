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
        Schema::create('installments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('installment_sale_id')->constrained('sales')->onDelete('cascade');
            $table->string('installment_number')->nullable();
            $table->decimal('installment_amount', 10, 2)->nullable();
            $table->date('installment_date')->nullable();
            $table->boolean('installment_is_paid')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('installments');
    }
};
