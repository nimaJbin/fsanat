<?php

use App\Enums\UserRole;

$allStaff = [UserRole::Owner->value, UserRole::Admin->value, UserRole::Operator->value];
$management = [UserRole::Owner->value, UserRole::Admin->value];
$ownerOnly = [UserRole::Owner->value];

return [
    [
        'label' => 'نمای کلی',
        'items' => [
            ['label' => 'داشبورد', 'icon' => 'ti-layout-dashboard', 'route' => 'admin.dashboard', 'active' => 'admin.dashboard', 'roles' => $allStaff],
        ],
    ],
    [
        'label' => 'فروش و عملیات',
        'items' => [
            ['label' => 'سفارش‌ها', 'icon' => 'ti-shopping-cart', 'route' => null, 'roles' => $allStaff],
            ['label' => 'تأییدها', 'icon' => 'ti-checkup-list', 'route' => null, 'roles' => $management],
            ['label' => 'موجودی', 'icon' => 'ti-packages', 'route' => null, 'roles' => $allStaff],
            ['label' => 'توقف پویا', 'icon' => 'ti-snowflake', 'route' => null, 'roles' => $management],
        ],
    ],
    [
        'label' => 'کاتالوگ',
        'items' => [
            ['label' => 'محصولات', 'icon' => 'ti-package', 'route' => null, 'roles' => $allStaff],
            ['label' => 'دسته‌بندی و طبقه‌بندی', 'icon' => 'ti-category-2', 'route' => null, 'roles' => $management],
            ['label' => 'عملیات گروهی', 'icon' => 'ti-stack-2', 'route' => null, 'roles' => $management],
            ['label' => 'ورود اطلاعات', 'icon' => 'ti-file-import', 'route' => null, 'roles' => $management],
        ],
    ],
    [
        'label' => 'ارتباط با مشتری',
        'items' => [
            ['label' => 'کاربران', 'icon' => 'ti-users', 'route' => null, 'roles' => $management],
            ['label' => 'تیکت‌ها', 'icon' => 'ti-messages', 'route' => null, 'roles' => $allStaff],
            ['label' => 'کیف پول', 'icon' => 'ti-wallet', 'route' => null, 'roles' => $management],
        ],
    ],
    [
        'label' => 'مدیریت',
        'items' => [
            ['label' => 'مالی و سود', 'icon' => 'ti-chart-line', 'route' => null, 'roles' => $ownerOnly],
            ['label' => 'گزارش‌ها', 'icon' => 'ti-report-analytics', 'route' => null, 'roles' => $management],
            ['label' => 'تنظیمات', 'icon' => 'ti-settings', 'route' => 'admin.password.edit', 'active' => 'admin.password.*', 'roles' => $management],
            ['label' => 'گزارش فعالیت', 'icon' => 'ti-history', 'route' => null, 'roles' => $ownerOnly],
        ],
    ],
];
