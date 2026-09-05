@props(['name', 'description', 'icon'])
<article {{ $attributes->class(['storefront-category-card']) }}>
    <span class="storefront-category-card__icon" aria-hidden="true"><i class="ti {{ $icon }}"></i></span>
    <div><h3>{{ $name }}</h3><p>{{ $description }}</p></div>
    <span class="storefront-category-card__status">فعال</span>
</article>
