@props(['product'])
<article {{ $attributes->class(['storefront-product-card']) }}>
    <div class="storefront-product-card__media" aria-hidden="true"><i class="ti {{ $product['icon'] }}"></i><span>SKU: {{ $product['sku'] }}</span></div>
    <div class="storefront-product-card__body">
        <span class="storefront-product-card__eyebrow">{{ $product['eyebrow'] }}</span>
        <h3>{{ $product['name'] }}</h3>
        <p class="storefront-product-card__stock">{{ $product['stock'] }}</p>
        <div class="storefront-product-card__footer"><strong>{{ $product['price'] }}</strong></div>
    </div>
</article>
