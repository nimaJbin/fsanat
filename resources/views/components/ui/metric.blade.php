@props(['label', 'value', 'context' => null, 'icon' => 'ti-chart-bar', 'variant' => 'neutral'])

<article {{ $attributes->class(['card', 'ui-metric', 'ui-metric--'.$variant]) }}>
    <div class="card-body">
        <div class="d-flex align-items-start justify-content-between gap-3">
            <div>
                <div class="ui-metric__label">{{ $label }}</div>
                <div class="ui-metric__value">{{ $value }}</div>
                @if($context)<div class="ui-metric__context">{{ $context }}</div>@endif
            </div>
            <span class="ui-metric__icon" aria-hidden="true"><i class="ti {{ $icon }}"></i></span>
        </div>
    </div>
</article>
