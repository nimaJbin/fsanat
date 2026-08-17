@props(['id', 'title', 'size' => null, 'confirmLabel' => null, 'confirmVariant' => 'danger'])

<div class="modal modal-blur fade" id="{{ $id }}" tabindex="-1" aria-labelledby="{{ $id }}-title" aria-hidden="true">
    <div @class(['modal-dialog', 'modal-dialog-centered', 'modal-'.$size => $size]) role="document">
        <div class="modal-content">
            <header class="modal-header">
                <h2 class="modal-title" id="{{ $id }}-title">{{ $title }}</h2>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="بستن"></button>
            </header>
            <div class="modal-body">{{ $slot }}</div>
            <footer class="modal-footer">
                <x-ui.button variant="secondary" data-bs-dismiss="modal">انصراف</x-ui.button>
                @isset($footer)
                    {{ $footer }}
                @elseif($confirmLabel)
                    <x-ui.button :variant="$confirmVariant">{{ $confirmLabel }}</x-ui.button>
                @endisset
            </footer>
        </div>
    </div>
</div>
