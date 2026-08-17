<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? config('app.name', 'فروشگاه صنعت جوان') }}</title>
    <meta name="description" content="{{ $description ?? 'فروشگاه صنعت جوان؛ زیرساخت فروش تخصصی قطعات و تجهیزات صنعتی.' }}">
    <meta name="theme-color" content="#16324F">
    <link rel="canonical" href="{{ $canonical ?? url()->current() }}">
    <meta property="og:locale" content="fa_IR">
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{ $title ?? config('app.name', 'فروشگاه صنعت جوان') }}">
    <meta property="og:description" content="{{ $description ?? 'فروشگاه صنعت جوان؛ زیرساخت فروش تخصصی قطعات و تجهیزات صنعتی.' }}">
    <meta property="og:url" content="{{ $canonical ?? url()->current() }}">
    @vite(['resources/css/storefront.css', 'resources/js/storefront.js'])
    @stack('head')
</head>
<body>
    <a class="skip-link" href="#main-content">پرش به محتوای اصلی</a>
    @yield('body')
</body>
</html>
