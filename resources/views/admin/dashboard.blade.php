@extends('layouts.admin.authenticated', [
    'title' => 'داشبورد مدیریت',
    'pageTitle' => 'داشبورد مدیریت',
    'pageDescription' => 'نمای سریع از وضعیت عملیاتی فروشگاه و موارد نیازمند توجه.',
    'breadcrumbs' => [
        ['label' => 'داشبورد'],
    ],
])

@section('content')
    <section class="card admin-placeholder-card" aria-labelledby="dashboard-preview-title">
        <div class="card-body">
            <span class="badge bg-azure-lt mb-3">داده نمایشی</span>
            <h2 class="h3" id="dashboard-preview-title">زیرساخت داشبورد آماده است</h2>
            <p class="text-secondary mb-0">ویجت‌های عملیاتی و وضعیت‌های کامل داشبورد در زیر‌فاز ۱.۵ به این پوسته متصل می‌شوند.</p>
        </div>
    </section>
@endsection
