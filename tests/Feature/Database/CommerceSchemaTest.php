<?php

namespace Tests\Feature\Database;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Schema;
use Tests\TestCase;

class CommerceSchemaTest extends TestCase
{
    use RefreshDatabase;

    public function test_mvp_commerce_tables_and_critical_columns_exist(): void
    {
        $tables = [
            'customer_profiles', 'addresses', 'brands', 'categories', 'products',
            'category_product', 'inventories', 'inventory_movements', 'orders',
            'order_items', 'payments', 'shipments',
        ];

        foreach ($tables as $table) {
            $this->assertTrue(Schema::hasTable($table), "Missing table: {$table}");
        }

        $this->assertTrue(Schema::hasColumns('products', ['sku', 'price_rial', 'status']));
        $this->assertTrue(Schema::hasColumns('inventories', ['quantity_on_hand', 'quantity_reserved', 'version']));
        $this->assertTrue(Schema::hasColumns('orders', ['number', 'status', 'approval_status', 'payment_status', 'grand_total_rial']));
        $this->assertTrue(Schema::hasColumns('order_items', ['product_name', 'sku', 'unit_price_rial', 'unit_base_cost_rial']));
    }
}
