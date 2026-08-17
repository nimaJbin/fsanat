@extends('layouts.admin.guest', ['title' => 'دسترسی غیرمجاز', 'showAuthFooter' => false])

@section('content')
    <section class="card admin-auth-card text-center" aria-labelledby="error-title">
        <div class="card-body p-4 p-sm-5">
            <div class="admin-error-code" aria-hidden="true">403</div>
            <h1 class="h2" id="error-title">اجازه دسترسی ندارید</h1>
            <p class="text-secondary mb-4">حساب شما مجوز مشاهده این بخش را ندارد. اگر تصور می‌کنید این محدودیت اشتباه است، با مالک فروشگاه تماس بگیرید.</p>
            <a class="btn btn-primary" href="{{ auth()->check() && auth()->user()->isStaff() ? route('admin.dashboard') : route('home') }}">بازگشت به صفحه امن</a>
        </div>
    </section>
@endsection
