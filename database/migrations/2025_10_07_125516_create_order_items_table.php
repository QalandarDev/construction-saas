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
        Schema::create('order_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id')->constrained()->onDelete('cascade');
            $table->foreignId('product_id')->constrained()->onDelete('cascade');
            $table->foreignId('product_unit_id')->constrained()->onDelete('cascade'); // unit chosen by buyer
            $table->decimal('quantity', 20,6); // in product unit
            $table->decimal('base_quantity', 20,6); // = quantity * conversion_rate
            $table->decimal('unit_price', 15,2); // price per chosen unit
            $table->decimal('total', 15,2); // quantity * unit_price
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_items');
    }
};
