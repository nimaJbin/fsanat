<?php

namespace Tests\Feature\Storefront;

use App\Enums\ProductStatus;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class HomepageTest extends TestCase
{
    use RefreshDatabase;

    public function test_homepage_renders_the_complete_rtl_structure(): void
    {
        $this->get('/')
            ->assertOk()
            ->assertSee('dir="rtl"', false)
            ->assertSee('انتخاب دقیق‌تر برای نیازهای صنعتی')
            ->assertSee('دسته‌بندی‌های اصلی')
            ->assertSee('محصولات منتخب')
            ->assertSee('محصولات جدید')
            ->assertSee('برندهای کاتالوگ')
            ->assertSee('اطلاعات تماس')
            ->assertSee('هنوز محصول فعالی ثبت نشده است');
    }

    public function test_homepage_has_base_seo_metadata_and_one_primary_heading(): void
    {
        $response = $this->get('/')->assertOk();

        $response
            ->assertSee('<meta name="description"', false)
            ->assertSee('<link rel="canonical"', false)
            ->assertSee('<meta property="og:title"', false);

        $this->assertSame(1, substr_count($response->getContent(), '<h1>'));
    }

    public function test_homepage_renders_only_live_active_catalog_data(): void
    {
        $brand = Brand::create(['name' => 'برند واقعی', 'slug' => 'real-brand']);
        $category = Category::create(['name' => 'دسته واقعی', 'slug' => 'real-category']);
        $product = Product::create([
            'brand_id' => $brand->id,
            'sku' => 'REAL-1',
            'name' => 'محصول واقعی',
            'slug' => 'real-product',
            'price_rial' => 5_000_000,
            'status' => ProductStatus::Active,
            'published_at' => now(),
        ]);
        $product->categories()->attach($category, ['is_primary' => true]);
        $product->inventory()->create(['quantity_on_hand' => 3]);

        $this->get('/')
            ->assertOk()
            ->assertSee('محصول واقعی')
            ->assertSee('5,000,000 ریال')
            ->assertSee('موجود در انبار')
            ->assertSee('دسته واقعی')
            ->assertSee('برند واقعی')
            ->assertSee('شماره تماس، نشانی و ساعات پاسخ‌گویی هنوز تنظیم نشده‌اند')
            ->assertDontSee('محصول صنعتی نمونه');
    }
}
