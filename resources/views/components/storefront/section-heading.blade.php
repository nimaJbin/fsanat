@props(['title', 'id', 'link', 'eyebrow' => null])
<header class="storefront-section-heading"><div>@if($eyebrow)<p>{{ $eyebrow }}</p>@endif<h2 id="{{ $id }}">{{ $title }}</h2></div>{{ $meta ?? '' }}<a href="#categories">{{ $link }}<i class="ti ti-arrow-left"></i></a></header>
