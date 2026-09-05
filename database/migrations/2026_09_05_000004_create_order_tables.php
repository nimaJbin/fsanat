<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('number', 32)->unique();
            $table->foreignId('user_id')->nullable()->constrained()->nullOnDelete();
            $table->string('status', 32)->default('pending')->index();
            $table->string('approval_status', 32)->default('not_required')->index();
            $table->string('payment_status', 32)->default('unpaid')->index();
            $table->string('currency', 3)->default('IRR');
            $table->unsignedBigInteger('items_total_rial');
            $table->unsignedBigInteger('discount_total_rial')->default(0);
            $table->unsignedBigInteger('shipping_total_rial')->default(0);
            $table->unsignedBigInteger('grand_total_rial');
            $table->string('customer_name');
            $table->string('customer_phone', 20);
            $table->string('customer_email')->nullable();
            $table->string('shipping_province', 100);
            $table->string('shipping_city', 100);
            $table->text('shipping_address');
            $table->string('shipping_postal_code', 20);
            $table->text('note')->nullable();
            $table->timestamp('submitted_at')->nullable();
            $table->timestamp('completed_at')->nullable();
            $table->timestamp('cancelled_at')->nullable();
            $table->timestamps();

            $table->index(['user_id', 'created_at']);
            $table->index(['status', 'created_at']);
        });

        Schema::create('order_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id')->constrained()->cascadeOnDelete();
            $table->foreignId('product_id')->nullable()->constrained()->nullOnDelete();
            $table->string('product_name');
            $table->string('sku', 100);
            $table->unsignedBigInteger('unit_price_rial');
            $table->unsignedBigInteger('unit_base_cost_rial')->nullable();
            $table->unsignedInteger('quantity');
            $table->unsignedBigInteger('line_total_rial');
            $table->timestamps();

            $table->index(['order_id', 'product_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('order_items');
        Schema::dropIfExists('orders');
    }
};
