@props(['variant' => 'info', 'title' => null, 'dismissible' => false])

@php($bootstrapVariant = $variant === 'error' ? 'danger' : $variant)

<div {{ $attributes->class(['alert', 'alert-'.$bootstrapVariant, 'alert-dismissible' => $dismissible]) }} role="{{ $variant === 'error' ? 'alert' : 'status' }}">
    @if($title)<strong class="d-block mb-1">{{ $title }}</strong>@endif
    {{ $slot }}
    @if($dismissible)<button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="بستن پیام"></button>@endif
</div>
