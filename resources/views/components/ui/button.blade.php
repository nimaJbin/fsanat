@props([
    'href' => null,
    'variant' => 'primary',
    'type' => 'button',
    'disabled' => false,
    'loading' => false,
    'icon' => null,
])

@php
    $variantClass = match ($variant) {
        'accent' => 'btn-accent',
        'secondary' => 'btn-outline-secondary',
        'quiet' => 'btn-ghost-secondary',
        'danger' => 'btn-danger',
        default => 'btn-primary',
    };
    $isDisabled = $disabled || $loading;
@endphp

@if ($href && ! $isDisabled)
    <a {{ $attributes->class(['btn', $variantClass]) }} href="{{ $href }}">
        @if ($icon)<i class="ti {{ $icon }}" aria-hidden="true"></i>@endif
        <span>{{ $slot }}</span>
    </a>
@else
    <button
        {{ $attributes->class(['btn', $variantClass]) }}
        type="{{ $type }}"
        @disabled($isDisabled)
        @if($loading) aria-busy="true" @endif
    >
        @if ($loading)
            <span class="spinner-border spinner-border-sm" aria-hidden="true"></span>
            <span class="visually-hidden">در حال پردازش</span>
        @elseif ($icon)
            <i class="ti {{ $icon }}" aria-hidden="true"></i>
        @endif
        <span>{{ $slot }}</span>
    </button>
@endif
