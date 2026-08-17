@extends('layouts.storefront', [
    'title' => 'فروشگاه صنعت جوان | قطعات و تجهیزات صنعتی',
    'description' => 'فروشگاه صنعت جوان؛ زیرساخت فروش تخصصی قطعات و تجهیزات صنعتی با تمرکز بر اطلاعات شفاف و تجربه خرید منظم.',
    'canonical' => route('home'),
])

@section('content')
<main id="main-content">
    <section class="storefront-hero">
        <div class="container-xl storefront-hero__grid">
            <div class="storefront-hero__content">
                <x-ui.badge variant="warning" icon="ti-building-factory-2">فروشگاه تخصصی صنعت</x-ui.badge>
                <h1>انتخاب دقیق‌تر برای نیازهای صنعتی</h1>
                <p>ساختار فروشگاه برای دسترسی روشن به مشخصات، دسته‌بندی و وضعیت کالاهای صنعتی در حال آماده‌سازی است.</p>
                <div class="storefront-hero__actions"><x-ui.button href="#categories" variant="accent" icon="ti-category-2">مشاهده دسته‌بندی‌ها</x-ui.button><x-ui.button href="#featured-products" variant="secondary">محصولات منتخب</x-ui.button></div>
                <p class="storefront-preview-note"><i class="ti ti-info-circle" aria-hidden="true"></i> محتوای محصول و دسته‌بندی این نسخه نمایشی است.</p>
            </div>
            <div class="storefront-hero__visual" aria-hidden="true"><div class="storefront-hero__machine"><i class="ti ti-settings-cog"></i><i class="ti ti-settings"></i><i class="ti ti-tool"></i></div><span>Industrial Precision</span></div>
        </div>
    </section>

    <section class="storefront-section" id="categories" aria-labelledby="categories-title">
        <div class="container-xl"><header class="storefront-section__header"><div><span>مسیرهای دسترسی</span><h2 id="categories-title">دسته‌بندی‌های اصلی</h2></div><p>ساختار نهایی پس از تعریف کاتالوگ جایگزین می‌شود.</p></header>
            <div class="row g-3">@foreach($home['categories'] as $category)<div class="col-12 col-sm-6 col-xl-3"><x-storefront.category-card :name="$category['name']" :description="$category['description']" :icon="$category['icon']" /></div>@endforeach</div>
        </div>
    </section>

    <section class="storefront-section storefront-section--surface" id="featured-products" aria-labelledby="featured-title">
        <div class="container-xl"><header class="storefront-section__header"><div><span>پیش‌نمایش کاتالوگ</span><h2 id="featured-title">محصولات منتخب</h2></div><p>قیمت و موجودی واقعی هنوز ثبت نشده‌اند.</p></header>
            <div class="row g-3">@foreach($home['featured_products'] as $product)<div class="col-12 col-sm-6 col-xl-3"><x-storefront.product-card :product="$product" /></div>@endforeach</div>
        </div>
    </section>

    <section class="storefront-trust" aria-labelledby="trust-title"><div class="container-xl"><header class="storefront-section__header"><div><span>اصول تجربه فروشگاه</span><h2 id="trust-title">اطلاعات روشن، فرایند قابل پیگیری</h2></div></header><div class="row g-3"><div class="col-12 col-md-4"><article><i class="ti ti-list-details" aria-hidden="true"></i><h3>مشخصات ساختاریافته</h3><p>اطلاعات کالا با الگوی یکسان و قابل مقایسه ارائه خواهد شد.</p></article></div><div class="col-12 col-md-4"><article><i class="ti ti-package" aria-hidden="true"></i><h3>وضعیت موجودی شفاف</h3><p>نمایش موجودی پس از اتصال سیستم انبار از منبع معتبر انجام می‌شود.</p></article></div><div class="col-12 col-md-4"><article><i class="ti ti-message-circle-question" aria-hidden="true"></i><h3>پشتیبانی قابل پیگیری</h3><p>زیرساخت تیکت برای ثبت و پیگیری درخواست‌ها در نقشه راه قرار دارد.</p></article></div></div></div></section>

    <section class="storefront-section" id="new-products" aria-labelledby="new-title"><div class="container-xl"><header class="storefront-section__header"><div><span>چیدمان پیشنهادی</span><h2 id="new-title">محصولات جدید</h2></div><p>ترتیب این بخش پس از ثبت تاریخ انتشار محصولات واقعی می‌شود.</p></header><div class="row g-3">@foreach($home['new_products'] as $product)<div class="col-12 col-md-4"><x-storefront.product-card :product="$product" /></div>@endforeach</div></div></section>

    <section class="storefront-brands" aria-labelledby="brands-title"><div class="container-xl"><header class="storefront-section__header"><div><span>جایگاه برندها</span><h2 id="brands-title">برندهای کاتالوگ</h2></div><p>نام‌های زیر نمونه‌اند و به معنی همکاری تجاری نیستند.</p></header><div class="storefront-brands__grid">@foreach($home['brands'] as $brand)<span>{{ $brand }}</span>@endforeach</div></div></section>

    <section class="storefront-cta"><div class="container-xl"><div><span>آماده‌سازی فروشگاه</span><h2>کاتالوگ واقعی مرحله بعدی این مسیر است</h2><p>پس از تکمیل مدل محصول و دسته‌بندی، این صفحه بدون تغییر معماری به داده واقعی متصل می‌شود.</p></div><x-ui.button href="#categories" variant="accent" icon="ti-arrow-up">بازگشت به دسته‌بندی‌ها</x-ui.button></div></section>
</main>
@endsection
