<?php

namespace Tests\Feature\Storefront;

use Tests\TestCase;

class HomepageTest extends TestCase
{
    public function test_homepage_renders_the_complete_rtl_preview_structure(): void
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
            ->assertSee('محتوای محصول و دسته‌بندی این نسخه نمایشی است');
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

    public function test_homepage_does_not_present_placeholder_commerce_data_as_real(): void
    {
        $this->get('/')
            ->assertOk()
            ->assertSee('قیمت هنوز ثبت نشده')
            ->assertSee('نام‌های زیر نمونه‌اند و به معنی همکاری تجاری نیستند')
            ->assertSee('شماره تماس، نشانی و ساعات پاسخ‌گویی هنوز تنظیم نشده‌اند')
            ->assertDontSee('رضایت مشتری')
            ->assertDontSee('ارسال رایگان');
    }
}
