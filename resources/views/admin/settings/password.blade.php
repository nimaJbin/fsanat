@extends('layouts.admin.authenticated', [
    'title' => 'تغییر رمز عبور',
    'pageTitle' => 'تغییر رمز عبور',
    'pageDescription' => 'برای حفظ امنیت حساب، از یک رمز عبور منحصربه‌فرد استفاده کنید.',
    'breadcrumbs' => [
        ['label' => 'داشبورد', 'url' => route('admin.dashboard')],
        ['label' => 'تغییر رمز عبور'],
    ],
])

@section('content')
    <div class="row row-cards">
        <div class="col-12 col-xl-7">
            <section class="card" aria-labelledby="password-form-title">
                <div class="card-header">
                    <h2 class="card-title" id="password-form-title">رمز عبور جدید</h2>
                </div>
                <form method="POST" action="{{ route('admin.password.update') }}">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                    <div class="mb-3">
                        <label class="form-label" for="current_password">رمز عبور فعلی</label>
                        <input class="form-control @error('current_password') is-invalid @enderror" id="current_password" name="current_password" type="password" autocomplete="current-password" required>
                        @error('current_password')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="password">رمز عبور جدید</label>
                        <input class="form-control @error('password') is-invalid @enderror" id="password" name="password" type="password" autocomplete="new-password" required>
                        @error('password')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>

                    <div class="mb-4">
                        <label class="form-label" for="password_confirmation">تکرار رمز عبور جدید</label>
                        <input class="form-control" id="password_confirmation" name="password_confirmation" type="password" autocomplete="new-password" required>
                    </div>
                    </div>
                    <div class="card-footer d-flex flex-wrap gap-2 justify-content-end">
                        <a class="btn btn-outline-secondary" href="{{ route('admin.dashboard') }}">انصراف</a>
                        <button class="btn btn-accent" type="submit">ذخیره رمز جدید</button>
                    </div>
                </form>
            </section>
        </div>
        <div class="col-12 col-xl-5">
            <aside class="card bg-primary-lt" aria-labelledby="password-guide-title">
                <div class="card-body">
                    <h2 class="h3" id="password-guide-title">راهنمای امنیت</h2>
                    <ul class="mb-0 ps-3">
                        <li>رمز عبور را در سرویس دیگری استفاده نکنید.</li>
                        <li>از عبارت طولانی و غیرقابل‌حدس استفاده کنید.</li>
                        <li>رمز عبور را برای هیچ‌کس ارسال نکنید.</li>
                    </ul>
                </div>
            </aside>
        </div>
    </div>
@endsection
