@php($mobile = $mobile ?? false)

<div class="admin-sidebar__inner">
    @unless($mobile)
        <div class="admin-sidebar__brand">
            <a class="fs-wordmark" href="{{ route('admin.dashboard') }}" aria-label="داشبورد فروشگاه صنعت جوان">
                <span class="admin-sidebar__mark" aria-hidden="true">ص</span>
                <span class="admin-sidebar__label">صنعت جوان</span>
            </a>
        </div>
    @endunless

    <nav class="admin-nav" aria-label="بخش‌های پنل مدیریت">
        @foreach ($navigation as $group)
            <section class="admin-nav__group" aria-labelledby="admin-nav-group-{{ $loop->index }}{{ $mobile ? '-mobile' : '' }}">
                <h2 class="admin-nav__heading" id="admin-nav-group-{{ $loop->index }}{{ $mobile ? '-mobile' : '' }}">{{ $group['label'] }}</h2>
                <ul class="admin-nav__list">
                    @foreach ($group['items'] as $item)
                        <li>
                            @if ($item['available'])
                                <a class="admin-nav__link {{ $item['current'] ? 'is-active' : '' }}" href="{{ $item['url'] }}" @if($item['current']) aria-current="page" @endif>
                                    <i class="ti {{ $item['icon'] }} admin-nav__icon" aria-hidden="true"></i>
                                    <span class="admin-sidebar__label">{{ $item['label'] }}</span>
                                </a>
                            @else
                                <span class="admin-nav__link is-disabled" aria-disabled="true" title="در فازهای بعدی فعال می‌شود">
                                    <i class="ti {{ $item['icon'] }} admin-nav__icon" aria-hidden="true"></i>
                                    <span class="admin-sidebar__label">{{ $item['label'] }}</span>
                                    <span class="admin-nav__soon admin-sidebar__label">به‌زودی</span>
                                </span>
                            @endif
                        </li>
                    @endforeach
                </ul>
            </section>
        @endforeach
    </nav>
</div>
