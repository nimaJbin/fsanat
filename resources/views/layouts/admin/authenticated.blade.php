@extends('layouts.admin')

@section('body')
    <div class="admin-app" id="admin-app">
        <aside class="admin-sidebar d-none d-lg-flex" id="admin-sidebar" aria-label="منوی اصلی پنل مدیریت">
            @include('admin.partials.sidebar', ['navigation' => $adminNavigation])
        </aside>

        <div class="offcanvas offcanvas-start admin-mobile-sidebar" tabindex="-1" id="admin-mobile-sidebar" aria-labelledby="admin-mobile-sidebar-title">
            <div class="offcanvas-header border-bottom">
                <h2 class="offcanvas-title h4 fs-wordmark mb-0" id="admin-mobile-sidebar-title">فروشگاه صنعت جوان</h2>
                <button class="btn-close m-0" type="button" data-bs-dismiss="offcanvas" aria-label="بستن منو"></button>
            </div>
            <div class="offcanvas-body p-0">
                @include('admin.partials.sidebar', ['navigation' => $adminNavigation, 'mobile' => true])
            </div>
        </div>

        <div class="admin-content">
            @include('admin.partials.topbar')

            <main class="admin-main" id="main-content">
                <div class="container-xl">
                    @include('admin.partials.flash')

                    <header class="admin-page-header">
                        @if (! empty($breadcrumbs))
                            <nav aria-label="مسیر صفحه">
                                <ol class="breadcrumb mb-2">
                                    @foreach ($breadcrumbs as $breadcrumb)
                                        <li class="breadcrumb-item {{ $loop->last ? 'active' : '' }}" @if($loop->last) aria-current="page" @endif>
                                            @if (! $loop->last && ! empty($breadcrumb['url']))
                                                <a href="{{ $breadcrumb['url'] }}">{{ $breadcrumb['label'] }}</a>
                                            @else
                                                {{ $breadcrumb['label'] }}
                                            @endif
                                        </li>
                                    @endforeach
                                </ol>
                            </nav>
                        @endif

                        <div class="d-flex flex-wrap align-items-start justify-content-between gap-3">
                            <div>
                                <h1 class="admin-page-title">{{ $pageTitle ?? $title ?? 'پنل مدیریت' }}</h1>
                                @if (! empty($pageDescription))
                                    <p class="admin-page-description">{{ $pageDescription }}</p>
                                @endif
                            </div>
                            @yield('page-actions')
                        </div>
                    </header>

                    @yield('content')
                </div>
            </main>
        </div>
    </div>
@endsection
