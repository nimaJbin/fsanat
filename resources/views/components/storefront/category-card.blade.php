@props(['name', 'description', 'icon'])
<a href="#featured" {{ $attributes->class(['storefront-category-card']) }}><span class="storefront-category-card__icon" aria-hidden="true"><i class="ti {{ $icon }}"></i></span><span><strong>{{ $name }}</strong><small>{{ $description }}</small></span><i class="ti ti-chevron-left" aria-hidden="true"></i></a>
