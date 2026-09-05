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
                <p>محصولات صنعتی را با قیمت و وضعیت موجودی ثبت‌شده در فروشگاه بررسی کنید.</p>
                <div class="storefront-hero__actions"><x-ui.button href="#categories" variant="accent" icon="ti-category-2">مشاهده دسته‌بندی‌ها</x-ui.button><x-ui.button href="#featured-products" variant="secondary">محصولات منتخب</x-ui.button></div>
            </div>
            <div class="storefront-hero__visual" aria-hidden="true"><div class="storefront-hero__machine"><i class="ti ti-settings-cog"></i><i class="ti ti-settings"></i><i class="ti ti-tool"></i></div><span>Industrial Precision</span></div>
        </div>
    </section>

    <section class="storefront-section" id="categories" aria-labelledby="categories-title">
        <div class="container-xl"><header class="storefront-section__header"><div><span>مسیرهای دسترسی</span><h2 id="categories-title">دسته‌بندی‌های اصلی</h2></div><p>دسته‌بندی‌های فعال کاتالوگ.</p></header>
            @if($home['categories'] === [])<x-ui.state type="empty" title="هنوز دسته‌بندی فعالی ثبت نشده است" message="کاتالوگ فروشگاه به‌زودی تکمیل می‌شود." />@else<div class="row g-3">@foreach($home['categories'] as $category)<div class="col-12 col-sm-6 col-xl-3"><x-storefront.category-card :name="$category['name']" :description="$category['description']" :icon="$category['icon']" /></div>@endforeach</div>@endif
        </div>
    </section>

    <section class="storefront-section storefront-section--surface" id="featured-products" aria-labelledby="featured-title">
        <div class="container-xl"><header class="storefront-section__header"><div><span>کاتالوگ فروشگاه</span><h2 id="featured-title">محصولات منتخب</h2></div><p>جدیدترین محصولات فعال با قیمت و موجودی ثبت‌شده.</p></header>
            @if($home['featured_products'] === [])<x-ui.state type="empty" title="هنوز محصول فعالی ثبت نشده است" message="محصولات پس از انتشار در این بخش نمایش داده می‌شوند." />@else<div class="row g-3">@foreach($home['featured_products'] as $product)<div class="col-12 col-sm-6 col-xl-3"><x-storefront.product-card :product="$product" /></div>@endforeach</div>@endif
        </div>
    </section>

    <section class="storefront-trust" aria-labelledby="trust-title"><div class="container-xl"><header class="storefront-section__header"><div><span>اصول تجربه فروشگاه</span><h2 id="trust-title">اطلاعات روشن، فرایند قابل پیگیری</h2></div></header><div class="row g-3"><div class="col-12 col-md-4"><article><i class="ti ti-list-details" aria-hidden="true"></i><h3>مشخصات ساختاریافته</h3><p>اطلاعات کالا با الگوی یکسان و قابل بررسی ارائه می‌شود.</p></article></div><div class="col-12 col-md-4"><article><i class="ti ti-package" aria-hidden="true"></i><h3>وضعیت موجودی شفاف</h3><p>وضعیت کالا از موجودی ثبت‌شده در پنل مدیریت نمایش داده می‌شود.</p></article></div><div class="col-12 col-md-4"><article><i class="ti ti-message-circle-question" aria-hidden="true"></i><h3>پشتیبانی قابل پیگیری</h3><p>زیرساخت تیکت برای ثبت و پیگیری درخواست‌ها در نقشه راه قرار دارد.</p></article></div></div></div></section>

    <section class="storefront-section" id="new-products" aria-labelledby="new-title"><div class="container-xl"><header class="storefront-section__header"><div><span>تازه‌های کاتالوگ</span><h2 id="new-title">محصولات جدید</h2></div><p>آخرین محصولاتی که برای فروش فعال شده‌اند.</p></header>@if($home['new_products'] === [])<x-ui.state type="empty" title="محصول جدیدی وجود ندارد" />@else<div class="row g-3">@foreach($home['new_products'] as $product)<div class="col-12 col-md-4"><x-storefront.product-card :product="$product" /></div>@endforeach</div>@endif</div></section>

    <section class="storefront-brands" aria-labelledby="brands-title"><div class="container-xl"><header class="storefront-section__header"><div><span>تولیدکنندگان کاتالوگ</span><h2 id="brands-title">برندهای کاتالوگ</h2></div><p>برندهای دارای محصول فعال.</p></header>@if($home['brands'] === [])<x-ui.state type="empty" title="هنوز برند فعالی ثبت نشده است" />@else<div class="storefront-brands__grid">@foreach($home['brands'] as $brand)<span>{{ $brand }}</span>@endforeach</div>@endif</div></section>

    <section class="storefront-cta"><div class="container-xl"><div><span>کاتالوگ صنعت جوان</span><h2>اطلاعات محصول مستقیماً از کاتالوگ فروشگاه</h2><p>قیمت، برند و موجودی نمایش‌داده‌شده از داده ثبت‌شده در پنل مدیریت خوانده می‌شود.</p></div><x-ui.button href="#categories" variant="accent" icon="ti-arrow-up">بازگشت به دسته‌بندی‌ها</x-ui.button></div></section>
</main>
@endsection
