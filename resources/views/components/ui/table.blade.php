@props(['label', 'empty' => false, 'emptyTitle' => 'داده‌ای پیدا نشد', 'emptyMessage' => null])

<div {{ $attributes->class(['ui-table']) }}>
    @if($empty)
        <x-ui.state type="empty" :title="$emptyTitle" :message="$emptyMessage" />
    @else
        <div class="table-responsive">
            <table class="table table-vcenter card-table" aria-label="{{ $label }}">
                @isset($head)<thead>{{ $head }}</thead>@endisset
                <tbody>{{ $slot }}</tbody>
            </table>
        </div>
        @isset($footer)<div class="ui-table__footer">{{ $footer }}</div>@endisset
    @endif
</div>
