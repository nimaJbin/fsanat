<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? config('app.name', 'فروشگاه صنعت جوان') }}</title>
    @vite(['resources/css/storefront.css', 'resources/js/storefront.js'])
</head>
<body>
    <a class="skip-link" href="#main-content">پرش به محتوای اصلی</a>
    @yield('body')
</body>
</html>
