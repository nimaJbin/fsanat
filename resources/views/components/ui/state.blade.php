@props(['type' => 'empty', 'title', 'message' => null, 'icon' => null])

@php
    $resolvedIcon = $icon ?? match($type) {
        'loading' => 'ti-loader-2',
        'error' => 'ti-alert-triangle',
        'success' => 'ti-circle-check',
        default => 'ti-inbox',
    };
@endphp

<div {{ $attributes->class(['ui-state', 'ui-state--'.$type]) }} role="{{ $type === 'error' ? 'alert' : 'status' }}" @if($type === 'loading') aria-busy="true" @endif>
    <i class="ti {{ $resolvedIcon }} ui-state__icon {{ $type === 'loading' ? 'ui-spin' : '' }}" aria-hidden="true"></i>
    <h3 class="ui-state__title">{{ $title }}</h3>
    @if($message)<p class="ui-state__message">{{ $message }}</p>@endif
    @if(!$slot->isEmpty())<div class="ui-state__action">{{ $slot }}</div>@endif
</div>
