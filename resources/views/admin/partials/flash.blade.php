@foreach (['success' => 'success', 'warning' => 'warning', 'error' => 'danger', 'info' => 'info'] as $key => $variant)
    @if (session($key))
        <x-ui.alert :variant="$key" dismissible>{{ session($key) }}</x-ui.alert>
    @endif
@endforeach
