@extends('layouts.admin.guest', ['title' => 'صفحه پیدا نشد', 'showAuthFooter' => false])

@section('content')
    <section class="card admin-auth-card text-center" aria-labelledby="error-title">
        <div class="card-body p-4 p-sm-5">
            <div class="admin-error-code" aria-hidden="true">404</div>
            <h1 class="h2" id="error-title">این صفحه پیدا نشد</h1>
            <p class="text-secondary mb-4">ممکن است نشانی تغییر کرده باشد یا صفحه هنوز در دسترس نباشد.</p>
            <a class="btn btn-primary" href="{{ auth()->check() && auth()->user()->isStaff() ? route('admin.dashboard') : route('home') }}">بازگشت به صفحه اصلی</a>
        </div>
    </section>
@endsection
