@props(['product'])
<article {{ $attributes->class(['storefront-product-card']) }}>
    <div class="storefront-product-card__media" role="img" aria-label="تصویر جایگزین برای {{ $product['name'] }}"><i class="ti {{ $product['icon'] }}" aria-hidden="true"></i><span>تصویر محصول پس از ثبت کاتالوگ</span></div>
    <div class="storefront-product-card__body">
        <span class="storefront-product-card__eyebrow">{{ $product['eyebrow'] }}</span>
        <h3>{{ $product['name'] }}</h3>
        <p class="storefront-product-card__stock">{{ $product['stock'] }}</p>
        <div class="storefront-product-card__footer"><strong>{{ $product['price'] ?? 'قیمت هنوز ثبت نشده' }}</strong><button class="btn btn-sm btn-outline-secondary" type="button" disabled>مشاهده محصول</button></div>
    </div>
</article>
