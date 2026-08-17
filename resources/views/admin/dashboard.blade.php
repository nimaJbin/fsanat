@extends('layouts.admin.authenticated', [
    'title' => 'داشبورد مدیریت',
    'pageTitle' => 'داشبورد مدیریت',
    'pageDescription' => 'نمای سریع از وضعیت عملیاتی فروشگاه و موارد نیازمند توجه.',
    'breadcrumbs' => [
        ['label' => 'داشبورد'],
    ],
])

@section('content')
    <x-ui.card class="admin-placeholder-card" title="زیرساخت داشبورد آماده است">
        <x-ui.badge class="mb-3">داده نمایشی</x-ui.badge>
        <p class="text-secondary mb-0">ویجت‌های عملیاتی و وضعیت‌های کامل داشبورد در زیر‌فاز ۱.۵ به این پوسته متصل می‌شوند.</p>
    </x-ui.card>
@endsection
