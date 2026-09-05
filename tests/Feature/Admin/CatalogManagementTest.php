<?php

namespace Tests\Feature\Admin;

use App\Enums\ProductStatus;
use App\Enums\UserRole;
use App\Models\Brand;
use App\Models\Category;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CatalogManagementTest extends TestCase
{
    use RefreshDatabase;

    public function test_owner_can_manage_brands_and_categories(): void
    {
        $owner = User::factory()->create(['role' => UserRole::Owner]);

        $this->actingAs($owner)->post(route('admin.brands.store'), [
            'name' => 'برند اول',
            'slug' => 'brand-one',
            'is_active' => true,
        ])->assertRedirect(route('admin.brands.index'));

        $brand = Brand::where('slug', 'brand-one')->firstOrFail();
        $this->actingAs($owner)->put(route('admin.brands.update', $brand), [
            'name' => 'برند ویرایش‌شده',
            'slug' => 'brand-one',
        ])->assertRedirect(route('admin.brands.index'));

        $this->actingAs($owner)->post(route('admin.categories.store'), [
            'name' => 'دسته اول',
            'slug' => 'category-one',
            'sort_order' => 1,
            'is_active' => true,
        ])->assertRedirect(route('admin.categories.index'));

        $this->assertDatabaseHas('brands', ['id' => $brand->id, 'name' => 'برند ویرایش‌شده', 'is_active' => false]);
        $this->assertDatabaseHas('categories', ['slug' => 'category-one', 'sort_order' => 1]);
    }

    public function test_owner_can_create_a_complete_product_with_inventory(): void
    {
        $owner = User::factory()->create(['role' => UserRole::Owner]);
        $brand = Brand::create(['name' => 'برند صنعتی', 'slug' => 'industrial-brand']);
        $category = Category::create(['name' => 'ابزار صنعتی', 'slug' => 'industrial-tools']);

        $this->actingAs($owner)->post(route('admin.products.store'), [
            'brand_id' => $brand->id,
            'primary_category_id' => $category->id,
            'sku' => 'SKU-100',
            'name' => 'دریل صنعتی',
            'slug' => 'industrial-drill',
            'price_rial' => 12_500_000,
            'base_cost_rial' => 10_000_000,
            'quantity_on_hand' => 8,
            'reorder_point' => 2,
            'status' => ProductStatus::Active->value,
        ])->assertRedirect(route('admin.products.index'));

        $this->assertDatabaseHas('products', ['sku' => 'SKU-100', 'status' => 'active']);
        $this->assertDatabaseHas('inventories', ['quantity_on_hand' => 8, 'reorder_point' => 2]);
        $this->assertDatabaseHas('category_product', ['category_id' => $category->id, 'is_primary' => true]);
        $this->assertDatabaseHas('inventory_movements', ['quantity_delta' => 8, 'quantity_after' => 8]);
    }

    public function test_operator_cannot_manage_catalog_structure(): void
    {
        $operator = User::factory()->create(['role' => UserRole::Operator]);

        $this->actingAs($operator)->get(route('admin.brands.index'))->assertForbidden();
        $this->actingAs($operator)->get(route('admin.categories.index'))->assertForbidden();
        $this->actingAs($operator)->get(route('admin.products.index'))->assertOk();
    }
}
