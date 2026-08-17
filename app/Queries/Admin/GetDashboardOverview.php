<?php

namespace App\Queries\Admin;

class GetDashboardOverview
{
    /** @return array<string, mixed> */
    public function __invoke(): array
    {
        return [
            'state' => 'preview',
            'is_preview' => true,
            'metrics' => [
                ['label' => 'سفارش نیازمند بررسی', 'value' => '۱۲', 'context' => 'نمونه برای طراحی صف عملیات', 'icon' => 'ti-clipboard-check', 'variant' => 'warning'],
                ['label' => 'محصول فعال', 'value' => '۲۴۸', 'context' => 'نمونه تا راه‌اندازی کاتالوگ', 'icon' => 'ti-package', 'variant' => 'neutral'],
                ['label' => 'هشدار کمبود موجودی', 'value' => '۸', 'context' => 'نمونه تا راه‌اندازی موجودی', 'icon' => 'ti-alert-triangle', 'variant' => 'error'],
                ['label' => 'تیکت باز', 'value' => '۵', 'context' => 'نمونه تا راه‌اندازی پشتیبانی', 'icon' => 'ti-messages', 'variant' => 'neutral'],
            ],
            'attention' => [
                ['title' => 'بررسی سفارش‌های منتظر تأیید', 'meta' => '۱۲ مورد نمایشی', 'status' => 'نیازمند اقدام', 'variant' => 'warning', 'icon' => 'ti-clipboard-check'],
                ['title' => 'رسیدگی به کالاهای کم‌موجود', 'meta' => '۸ مورد نمایشی', 'status' => 'موجودی', 'variant' => 'error', 'icon' => 'ti-packages'],
                ['title' => 'بررسی پرداخت‌های ناموفق', 'meta' => '۳ مورد نمایشی', 'status' => 'پرداخت', 'variant' => 'error', 'icon' => 'ti-credit-card-off'],
            ],
            'orders' => [
                ['number' => 'نمونه-۱۰۰۳', 'customer' => 'مشتری نمونه سوم', 'amount' => '۴٬۸۵۰٬۰۰۰ تومان', 'status' => 'منتظر بررسی', 'variant' => 'warning'],
                ['number' => 'نمونه-۱۰۰۲', 'customer' => 'مشتری نمونه دوم', 'amount' => '۲٬۳۲۰٬۰۰۰ تومان', 'status' => 'پرداخت‌شده', 'variant' => 'success'],
                ['number' => 'نمونه-۱۰۰۱', 'customer' => 'مشتری نمونه اول', 'amount' => '۱٬۷۹۰٬۰۰۰ تومان', 'status' => 'در حال پردازش', 'variant' => 'info'],
            ],
            'inventory' => [
                ['product' => 'محصول نمونه صنعتی A', 'sku' => 'DEMO-A', 'remaining' => '۲ عدد'],
                ['product' => 'محصول نمونه صنعتی B', 'sku' => 'DEMO-B', 'remaining' => '۳ عدد'],
                ['product' => 'محصول نمونه صنعتی C', 'sku' => 'DEMO-C', 'remaining' => '۴ عدد'],
            ],
            'sales' => [
                ['label' => 'شنبه', 'value' => 32, 'display' => '۳٫۲ میلیون تومان'],
                ['label' => 'یکشنبه', 'value' => 48, 'display' => '۴٫۸ میلیون تومان'],
                ['label' => 'دوشنبه', 'value' => 41, 'display' => '۴٫۱ میلیون تومان'],
                ['label' => 'سه‌شنبه', 'value' => 67, 'display' => '۶٫۷ میلیون تومان'],
                ['label' => 'چهارشنبه', 'value' => 58, 'display' => '۵٫۸ میلیون تومان'],
                ['label' => 'پنجشنبه', 'value' => 76, 'display' => '۷٫۶ میلیون تومان'],
                ['label' => 'جمعه', 'value' => 52, 'display' => '۵٫۲ میلیون تومان'],
            ],
            'systems' => [
                ['label' => 'ورود اطلاعات', 'status' => 'هنوز راه‌اندازی نشده', 'variant' => 'neutral', 'icon' => 'ti-file-import'],
                ['label' => 'توقف پویا', 'status' => 'غیرفعال در نسخه فعلی', 'variant' => 'success', 'icon' => 'ti-snowflake-off'],
            ],
        ];
    }
}
