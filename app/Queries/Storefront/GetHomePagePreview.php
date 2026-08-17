<?php

namespace App\Queries\Storefront;

class GetHomePagePreview
{
    /** @return array<string, mixed> */
    public function __invoke(): array
    {
        return [
            'is_preview' => true,
            'copyright_year' => now()->year,
            'categories' => [
                ['name' => 'ابزار و تجهیزات', 'description' => 'دسته نمایشی برای ساختار کاتالوگ', 'icon' => 'ti-tools'],
                ['name' => 'قطعات مکانیکی', 'description' => 'دسته نمایشی برای ساختار کاتالوگ', 'icon' => 'ti-settings-cog'],
                ['name' => 'برق صنعتی', 'description' => 'دسته نمایشی برای ساختار کاتالوگ', 'icon' => 'ti-bolt'],
                ['name' => 'ایمنی و حفاظت', 'description' => 'دسته نمایشی برای ساختار کاتالوگ', 'icon' => 'ti-shield-check'],
            ],
            'featured_products' => [
                ['name' => 'محصول صنعتی نمونه A', 'eyebrow' => 'کالای نمایشی', 'price' => null, 'stock' => 'وضعیت موجودی پس از اتصال کاتالوگ', 'icon' => 'ti-tool'],
                ['name' => 'محصول صنعتی نمونه B', 'eyebrow' => 'کالای نمایشی', 'price' => null, 'stock' => 'وضعیت موجودی پس از اتصال کاتالوگ', 'icon' => 'ti-engine'],
                ['name' => 'محصول صنعتی نمونه C', 'eyebrow' => 'کالای نمایشی', 'price' => null, 'stock' => 'وضعیت موجودی پس از اتصال کاتالوگ', 'icon' => 'ti-device-cctv'],
                ['name' => 'محصول صنعتی نمونه D', 'eyebrow' => 'کالای نمایشی', 'price' => null, 'stock' => 'وضعیت موجودی پس از اتصال کاتالوگ', 'icon' => 'ti-building-factory-2'],
            ],
            'new_products' => [
                ['name' => 'محصول تازه نمونه E', 'eyebrow' => 'پیش‌نمایش محصول جدید', 'price' => null, 'stock' => 'موجودی نامشخص', 'icon' => 'ti-adjustments'],
                ['name' => 'محصول تازه نمونه F', 'eyebrow' => 'پیش‌نمایش محصول جدید', 'price' => null, 'stock' => 'موجودی نامشخص', 'icon' => 'ti-brand-speedtest'],
                ['name' => 'محصول تازه نمونه G', 'eyebrow' => 'پیش‌نمایش محصول جدید', 'price' => null, 'stock' => 'موجودی نامشخص', 'icon' => 'ti-gauge'],
            ],
            'brands' => ['برند نمونه الف', 'برند نمونه ب', 'برند نمونه پ', 'برند نمونه ت', 'برند نمونه ث'],
        ];
    }
}
