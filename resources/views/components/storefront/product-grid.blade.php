@props(['products', 'empty'])
@if($products === [])<x-ui.state type="empty" :title="$empty" />@else<div class="storefront-product-grid">@foreach($products as $product)<x-storefront.product-card :product="$product" />@endforeach</div>@endif
