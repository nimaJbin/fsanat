@extends('layouts.admin')

@section('body')
    <main class="admin-auth-page" id="main-content">
        <div class="admin-auth-wrap">
            <a class="admin-auth-brand fs-wordmark" href="{{ route('home') }}" aria-label="فروشگاه صنعت جوان؛ بازگشت به سایت">
                <span class="admin-auth-brand__mark" aria-hidden="true">ص</span>
                <span>فروشگاه صنعت جوان</span>
            </a>

            @yield('content')

            @if ($showAuthFooter ?? true)
                <p class="admin-auth-footer">ورود فقط برای کارکنان مجاز فروشگاه است.</p>
            @endif
        </div>
    </main>
@endsection
