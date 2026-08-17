@extends('layouts.admin.authenticated', [
    'title' => 'داشبورد مدیریت',
    'pageTitle' => 'داشبورد مدیریت',
    'pageDescription' => 'نمای سریع از وضعیت عملیاتی فروشگاه و موارد نیازمند توجه.',
    'breadcrumbs' => [['label' => 'داشبورد']],
])

@section('content')
    @if($dashboard['state'] === 'loading')
        <x-ui.state type="loading" title="در حال آماده‌سازی داشبورد" message="اطلاعات عملیاتی در حال دریافت است." />
    @elseif($dashboard['state'] === 'error')
        <x-ui.state type="error" title="دریافت داشبورد ناموفق بود" message="لطفاً صفحه را دوباره بارگذاری کنید. اگر مشکل ادامه داشت، گزارش خطا را بررسی کنید.">
            <x-ui.button :href="route('admin.dashboard')" variant="secondary" icon="ti-refresh">تلاش دوباره</x-ui.button>
        </x-ui.state>
    @else
    <x-ui.alert variant="warning" title="داشبورد در حالت پیش‌نمایش است">
        اعداد این صفحه صرفاً برای ارزیابی طراحی و جریان کاری هستند و داده واقعی فروشگاه محسوب نمی‌شوند.
    </x-ui.alert>

    <div class="row row-cards mb-4">
        @foreach($dashboard['metrics'] as $metric)
            <div class="col-12 col-sm-6 col-xl-3">
                <x-ui.metric :label="$metric['label']" :value="$metric['value']" :context="$metric['context']" :icon="$metric['icon']" :variant="$metric['variant']" />
            </div>
        @endforeach
    </div>

    <div class="row row-cards mb-4">
        <div class="col-12 col-xl-7">
            <x-ui.card title="موارد نیازمند توجه" description="اولویت‌های عملیاتی که باید بررسی شوند.">
                @if($dashboard['attention'] === [])
                    <x-ui.state type="success" title="مورد فوری وجود ندارد" message="در حال حاضر هیچ اقدام معوقی ثبت نشده است." />
                @else
                <div class="admin-attention-list">
                    @foreach($dashboard['attention'] as $item)
                        <article class="admin-attention-item">
                            <span class="admin-attention-item__icon" aria-hidden="true"><i class="ti {{ $item['icon'] }}"></i></span>
                            <div class="flex-fill"><h3>{{ $item['title'] }}</h3><p>{{ $item['meta'] }}</p></div>
                            <x-ui.badge :variant="$item['variant']">{{ $item['status'] }}</x-ui.badge>
                        </article>
                    @endforeach
                </div>
                @endif
                <x-slot:footer><span class="text-secondary small">مقصد هر مورد پس از پیاده‌سازی ماژول مربوط فعال می‌شود.</span></x-slot:footer>
            </x-ui.card>
        </div>
        <div class="col-12 col-xl-5">
            <x-ui.card title="فروش هفت روز اخیر" description="نمودار و مقادیر کاملاً نمایشی هستند.">
                <div class="admin-sales-chart" aria-hidden="true">
                    @foreach($dashboard['sales'] as $day)
                        <div class="admin-sales-chart__column">
                            <div class="admin-sales-chart__bar admin-sales-chart__bar--{{ min(8, max(1, (int) ceil($day['value'] / 10))) }}"></div>
                            <span>{{ $day['label'] }}</span>
                        </div>
                    @endforeach
                </div>
                <details class="mt-3">
                    <summary>مشاهده مقادیر متنی نمودار</summary>
                    <ul class="mt-2 mb-0">@foreach($dashboard['sales'] as $day)<li>{{ $day['label'] }}: {{ $day['display'] }}</li>@endforeach</ul>
                </details>
            </x-ui.card>
        </div>
    </div>

    <div class="row row-cards mb-4">
        <div class="col-12 col-xl-7">
            <x-ui.card title="سفارش‌های اخیر" description="این ردیف‌ها سفارش واقعی نیستند.">
                <x-ui.table label="سفارش‌های نمایشی اخیر" :empty="$dashboard['orders'] === []" empty-title="سفارشی وجود ندارد" empty-message="پس از ثبت سفارش، موارد اخیر در این بخش نمایش داده می‌شوند.">
                    <x-slot:head><tr><th>شماره</th><th>مشتری</th><th>مبلغ</th><th>وضعیت</th></tr></x-slot:head>
                    @foreach($dashboard['orders'] as $order)
                        <tr><td class="fw-semibold">{{ $order['number'] }}</td><td>{{ $order['customer'] }}</td><td>{{ $order['amount'] }}</td><td><x-ui.badge :variant="$order['variant']">{{ $order['status'] }}</x-ui.badge></td></tr>
                    @endforeach
                </x-ui.table>
            </x-ui.card>
        </div>
        <div class="col-12 col-xl-5">
            <x-ui.card title="هشدار موجودی" description="نمونه کالاهایی که به پیگیری نیاز دارند.">
                @if($dashboard['inventory'] === [])
                    <x-ui.state type="success" title="هشدار موجودی وجود ندارد" message="در حال حاضر کالای کم‌موجودی گزارش نشده است." />
                @else
                <div class="list-group list-group-flush">
                    @foreach($dashboard['inventory'] as $item)
                        <div class="list-group-item px-0 d-flex align-items-center justify-content-between gap-3">
                            <div><strong class="d-block">{{ $item['product'] }}</strong><small class="text-secondary">SKU: {{ $item['sku'] }}</small></div>
                            <x-ui.badge variant="warning">{{ $item['remaining'] }}</x-ui.badge>
                        </div>
                    @endforeach
                </div>
                @endif
            </x-ui.card>
        </div>
    </div>

    <div class="row row-cards">
        @foreach($dashboard['systems'] as $system)
            <div class="col-12 col-md-6">
                <x-ui.card>
                    <div class="d-flex align-items-center gap-3">
                        <span class="admin-system-icon" aria-hidden="true"><i class="ti {{ $system['icon'] }}"></i></span>
                        <div class="flex-fill"><h2 class="h3 mb-1">{{ $system['label'] }}</h2><p class="text-secondary mb-0">{{ $system['status'] }}</p></div>
                        <x-ui.badge :variant="$system['variant']">پیش‌نمایش</x-ui.badge>
                    </div>
                </x-ui.card>
            </div>
        @endforeach
    </div>
    @endif
@endsection
