@props(['id', 'title', 'placement' => 'start'])

<div class="offcanvas offcanvas-{{ $placement }}" tabindex="-1" id="{{ $id }}" aria-labelledby="{{ $id }}-title">
    <header class="offcanvas-header">
        <h2 class="offcanvas-title" id="{{ $id }}-title">{{ $title }}</h2>
        <button class="btn-close" type="button" data-bs-dismiss="offcanvas" aria-label="بستن"></button>
    </header>
    <div class="offcanvas-body">{{ $slot }}</div>
    @isset($footer)<footer class="border-top p-3">{{ $footer }}</footer>@endisset
</div>
