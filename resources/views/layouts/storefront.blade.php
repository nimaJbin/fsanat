@extends('layouts.app')

@section('body')
    <div class="storefront-app">
        @include('public.partials.header')
        @yield('content')
        @include('public.partials.footer')
    </div>
@endsection
