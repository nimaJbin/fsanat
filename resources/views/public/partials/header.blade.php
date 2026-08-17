<div class="storefront-announcement" role="note">نسخه اولیه فروشگاه در حال تکمیل است؛ اطلاعات کاتالوگ فعلاً نمایشی است.</div>
<header class="storefront-header">
    <div class="container-xl storefront-header__main">
        <button class="btn btn-icon btn-ghost-secondary d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#storefront-menu" aria-controls="storefront-menu" aria-label="بازکردن منوی سایت">
            <i class="ti ti-menu-2" aria-hidden="true"></i>
        </button>
        <a class="storefront-brand fs-wordmark" href="{{ route('home') }}" aria-label="فروشگاه صنعت جوان؛ صفحه اصلی">
            <span class="storefront-brand__mark" aria-hidden="true">ص</span><span>صنعت جوان</span>
        </a>
        <form class="storefront-search d-none d-md-flex" role="search" action="{{ route('home') }}" method="GET">
            <label class="visually-hidden" for="storefront-search">جست‌وجوی محصولات</label>
            <i class="ti ti-search" aria-hidden="true"></i>
            <input id="storefront-search" name="q" type="search" placeholder="جست‌وجوی محصول، برند یا کد کالا" disabled aria-describedby="search-preview-hint">
            <span class="visually-hidden" id="search-preview-hint">جست‌وجو پس از راه‌اندازی کاتالوگ فعال می‌شود.</span>
        </form>
        <div class="storefront-header__actions">
            <button class="btn btn-icon btn-ghost-secondary" type="button" disabled aria-label="حساب کاربری؛ به‌زودی"><i class="ti ti-user" aria-hidden="true"></i></button>
            <button class="btn btn-icon btn-ghost-secondary" type="button" disabled aria-label="سبد خرید؛ به‌زودی"><i class="ti ti-shopping-bag" aria-hidden="true"></i></button>
        </div>
    </div>
    <nav class="storefront-nav d-none d-lg-block" aria-label="دسترسی اصلی فروشگاه">
        <div class="container-xl">
            <ul><li><a href="#categories">دسته‌بندی‌ها</a></li><li><a href="#featured-products">محصولات منتخب</a></li><li><a href="#new-products">محصولات جدید</a></li><li><a href="#about-store">درباره فروشگاه</a></li></ul>
        </div>
    </nav>
</header>

<x-ui.drawer id="storefront-menu" title="منوی فروشگاه">
    <nav aria-label="منوی موبایل فروشگاه"><ul class="storefront-mobile-nav"><li><a href="#categories" data-bs-dismiss="offcanvas">دسته‌بندی‌ها</a></li><li><a href="#featured-products" data-bs-dismiss="offcanvas">محصولات منتخب</a></li><li><a href="#new-products" data-bs-dismiss="offcanvas">محصولات جدید</a></li><li><a href="#about-store" data-bs-dismiss="offcanvas">درباره فروشگاه</a></li></ul></nav>
    <div class="storefront-mobile-search"><i class="ti ti-search" aria-hidden="true"></i><span>جست‌وجو پس از راه‌اندازی کاتالوگ فعال می‌شود.</span></div>
</x-ui.drawer>
