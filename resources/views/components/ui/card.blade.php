@props(['title' => null, 'description' => null])

<section {{ $attributes->class(['card']) }}>
    @if($title || $description || isset($header))
        <header class="card-header">
            <div>
                @if($title)<h2 class="card-title">{{ $title }}</h2>@endif
                @if($description)<p class="card-subtitle">{{ $description }}</p>@endif
            </div>
            @isset($header)<div class="card-actions">{{ $header }}</div>@endisset
        </header>
    @endif
    <div class="card-body">{{ $slot }}</div>
    @isset($footer)<footer class="card-footer">{{ $footer }}</footer>@endisset
</section>
