@props(['id', 'label', 'icon' => 'ti-dots-vertical', 'align' => 'end'])

<div class="dropdown">
    <button {{ $attributes->class(['btn', 'btn-ghost-secondary']) }} id="{{ $id }}" type="button" data-bs-toggle="dropdown" aria-expanded="false">
        <i class="ti {{ $icon }}" aria-hidden="true"></i>
        <span>{{ $label }}</span>
    </button>
    <div class="dropdown-menu dropdown-menu-{{ $align }}" aria-labelledby="{{ $id }}">
        {{ $slot }}
    </div>
</div>
