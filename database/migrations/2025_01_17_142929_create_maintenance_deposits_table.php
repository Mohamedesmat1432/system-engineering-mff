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
        Schema::create('maintenance_deposits', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('sale_id')->unique();
            $table->foreign('sale_id')->references('id')->on('sales')->onDelete('cascade');
            $table->decimal('amount', 10, 2)->nullable();
            $table->date('date')->nullable();
            $table->boolean('status')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('maintenance_deposits');
    }
};
