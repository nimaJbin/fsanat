@props(['variant' => 'info', 'icon' => null])

@php
    $variantClass = match($variant) {
        'success' => 'bg-success-lt text-success',
        'warning' => 'bg-warning-lt text-warning',
        'error' => 'bg-danger-lt text-danger',
        'neutral' => 'bg-secondary-lt text-secondary',
        default => 'bg-azure-lt text-azure',
    };
@endphp

<span {{ $attributes->class(['badge', $variantClass]) }}>
    @if($icon)<i class="ti {{ $icon }}" aria-hidden="true"></i>@endif
    {{ $slot }}
</span>
