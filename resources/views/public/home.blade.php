@extends('layouts.storefront', [
    'title' => 'فروشگاه صنعت جوان | خرید قطعات، ابزار و تجهیزات صنعتی',
    'description' => 'فروشگاه تخصصی صنعت جوان؛ خرید ابزار، قطعات مکانیکی، برق صنعتی، PLC، UPS و تجهیزات اندازه‌گیری با مشخصات فنی شفاف و وضعیت موجودی مشخص.',
    'canonical' => route('home'),
])

@section('content')
<main id="main-content">
    <section class="storefront-hero" aria-labelledby="hero-title">
        <div class="container-xl storefront-hero__grid">
            <div><span class="storefront-kicker">فروشگاه تخصصی صنعت</span><h1 id="hero-title">انتخاب دقیق‌تر برای نیازهای صنعتی</h1><p>مشخصات فنی، وضعیت موجودی و مقایسهٔ کالاها را شفاف در اختیار شما می‌گذاریم؛ از ابزار کارگاهی و قطعات مکانیکی تا تجهیزات برق صنعتی، PLC و UPS.</p><div class="storefront-hero__actions"><a class="storefront-button storefront-button--accent" href="#categories">مشاهده دسته‌بندی‌ها<i class="ti ti-arrow-left"></i></a><a class="storefront-button storefront-button--secondary" href="#featured">محصولات منتخب</a></div></div>
            <div class="storefront-hero__visual" aria-label="جایگاه تصویر تجهیزات صنعتی"><div><i class="ti ti-cpu"></i><i class="ti ti-gauge"></i><i class="ti ti-ruler"></i></div><span>جایگاه تصویر تجهیزات صنعتی</span></div>
        </div>
    </section>
    <section class="storefront-benefits" aria-label="مزیت‌های خرید"><div class="container-xl">
        @foreach([['ti-shield-check','تضمین اصالت کالا','تأمین از مسیر رسمی و قابل استعلام'],['ti-file-description','مشخصات فنی شفاف','جزئیات فنی هر کالا به‌صورت ساختاریافته'],['ti-headset','مشاوره تخصصی خرید','راهنمایی برای انتخاب تجهیز مناسب'],['ti-truck-delivery','ارسال و پیگیری سفارش','وضعیت سفارش در هر مرحله قابل پیگیری']] as [$icon,$title,$text])
            <article><i class="ti {{ $icon }}"></i><div><h3>{{ $title }}</h3><p>{{ $text }}</p></div></article>
        @endforeach
    </div></section>
    <section class="storefront-section" id="categories" aria-labelledby="categories-title"><div class="container-xl"><x-storefront.section-heading eyebrow="مسیر کوتاه‌تر برای رسیدن به کالای مورد نیاز" title="دسته‌بندی‌های اصلی" id="categories-title" link="همهٔ دسته‌بندی‌ها" />@if($home['categories'] === [])<x-ui.state type="empty" title="هنوز دسته‌بندی فعالی ثبت نشده است" message="کاتالوگ فروشگاه به‌زودی تکمیل می‌شود." />@else<div class="storefront-category-grid">@foreach($home['categories'] as $category)<x-storefront.category-card :name="$category['name']" :description="$category['description']" :icon="$category['icon']" />@endforeach</div>@endif</div></section>
    <section class="storefront-section storefront-section--surface" id="offers" aria-labelledby="offers-title"><div class="container-xl"><x-storefront.section-heading title="پیشنهادهای ویژه" id="offers-title" link="مشاهده همه"><x-slot:meta><span class="storefront-timer">زمان باقی‌مانده (نمایشی): <b>۰۵:۴۲:۰۰</b></span></x-slot:meta></x-storefront.section-heading><x-storefront.product-grid :products="$home['offers']" empty="هنوز پیشنهاد ویژه‌ای ثبت نشده است" /></div></section>
    @foreach([['featured','featured-title','محصولات منتخب','featured_products','هنوز محصول فعالی ثبت نشده است'],['new','new-title','محصولات جدید','new_products','محصول جدیدی وجود ندارد'],['best','best-title','پرفروش‌ترین تجهیزات','best_products','هنوز محصولی برای نمایش وجود ندارد'],['ready','ready-title','کالاهای موجود و آماده ارسال','ready_products','در حال حاضر کالای آماده ارسالی وجود ندارد']] as [$sectionId,$titleId,$title,$key,$empty])
        <section class="storefront-section" id="{{ $sectionId }}" aria-labelledby="{{ $titleId }}"><div class="container-xl"><x-storefront.section-heading :title="$title" :id="$titleId" link="مشاهده همه" /><x-storefront.product-grid :products="$home[$key]" :empty="$empty" /></div></section>
    @endforeach
    <section class="storefront-advice" id="advice" aria-labelledby="advice-title"><div class="container-xl"><div><h2 id="advice-title">برای انتخاب تجهیز مناسب نیاز به راهنمایی دارید؟</h2><p>مشخصات کاربری و شرایط کاری خود را ثبت کنید تا گزینه‌های فنی متناسب با آن پیشنهاد شود.</p></div><div><a class="storefront-button storefront-button--accent" href="#support">دریافت مشاوره</a><a class="storefront-button storefront-button--on-dark" href="#support">تماس با فروشگاه</a></div></div></section>
    <section class="storefront-section" id="brands" aria-labelledby="brands-title"><div class="container-xl"><x-storefront.section-heading title="برندهای کاتالوگ" id="brands-title" link="مشاهده همه برندها" />@if($home['brands'] === [])<x-ui.state type="empty" title="هنوز برند فعالی ثبت نشده است" />@else<div class="storefront-brands">@foreach($home['brands'] as $brand)<span>{{ $brand }}</span>@endforeach</div>@endif</div></section>
    <section class="storefront-trust" aria-labelledby="trust-title"><div class="container-xl"><h2 id="trust-title">چرا خرید از صنعت جوان</h2><div>@foreach([['ti-list-details','مشخصات ساختاریافته','مقایسه فنی کالاها بدون جست‌وجوی پراکنده.'],['ti-package','وضعیت موجودی شفاف','موجود، محدود یا ناموجود؛ بدون ابهام.'],['ti-message-circle-question','پشتیبانی قابل پیگیری','هر درخواست شماره پیگیری مشخص دارد.']] as [$icon,$title,$text])<article><i class="ti {{ $icon }}"></i><h3>{{ $title }}</h3><p>{{ $text }}</p></article>@endforeach</div></div></section>
    <section class="storefront-section" id="articles" aria-labelledby="articles-title"><div class="container-xl"><x-storefront.section-heading title="راهنمای خرید و مطالب تخصصی" id="articles-title" link="همهٔ مطالب" /><div class="storefront-articles">
        @foreach([['راهنمای خرید','چگونه ابزار صنعتی متناسب با خط تولید انتخاب کنیم؟','معیارهای توان، دورکاری و چرخهٔ کار را پیش از خرید بررسی کنید.','۶ دقیقه مطالعه'],['مشخصات فنی','خواندن دیتاشیت تجهیزات برقی و انتخاب درست درایو','از جریان نامی تا کلاس حفاظت؛ اعدادی که واقعاً مهم هستند.','۸ دقیقه مطالعه'],['نگهداری','برنامهٔ نگهداری دوره‌ای برای تجهیزات کارگاهی','روانکاری، بازرسی و ثبت سوابق؛ سه گام کاهش توقف تولید.','۵ دقیقه مطالعه']] as [$tag,$title,$text,$time])
            <article><span>{{ $tag }}</span><h3>{{ $title }}</h3><p>{{ $text }}</p><small>{{ $time }}</small><a href="#support" aria-label="مطالعه {{ $title }}"><i class="ti ti-arrow-left"></i></a></article>
        @endforeach
    </div></div></section>
    <section class="storefront-newsletter" id="newsletter" aria-labelledby="newsletter-title"><div class="container-xl"><div><h2 id="newsletter-title">از محصولات و پیشنهادهای تازه باخبر شوید</h2><p>فقط اطلاع‌رسانی کالاهای جدید، تغییر موجودی و پیشنهادهای فروشگاه ارسال می‌شود؛ حداکثر ماهی دو پیام و لغو عضویت در هر زمان.</p></div><form><label class="visually-hidden" for="newsletter-email">ایمیل شما</label><input id="newsletter-email" type="email" placeholder="ایمیل شما" disabled><button type="button" disabled>عضویت</button></form></div></section>
</main>
@endsection
