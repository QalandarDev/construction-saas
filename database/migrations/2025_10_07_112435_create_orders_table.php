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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('team_id')->nullable()->constrained()->onDelete('set null');
            $table->foreignId('warehouse_id')->nullable()->constrained()->onDelete('set null');
            $table->foreignId('buyer_user_id')->nullable()->constrained('users')->onDelete('set null');
            $table->foreignId('customer_id')->nullable()->constrained('customers')->onDelete('set null');
            $table->enum('status', ['pending', 'approved', 'shipped', 'delivered', 'returned', 'cancelled', 'paid', 'debt'])->default('pending');
            $table->decimal('total_amount', 15, 2)->default(0);
            $table->decimal('paid_amount', 15, 2)->default(0);
            $table->decimal('debt_amount', 15, 2)->default(0);
            $table->date('due_date')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
