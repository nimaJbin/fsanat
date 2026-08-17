@foreach (['success' => 'success', 'warning' => 'warning', 'error' => 'danger', 'info' => 'info'] as $key => $variant)
    @if (session($key))
        <div class="alert alert-{{ $variant }} alert-dismissible" role="{{ $key === 'error' ? 'alert' : 'status' }}">
            {{ session($key) }}
            <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="بستن پیام"></button>
        </div>
    @endif
@endforeach
