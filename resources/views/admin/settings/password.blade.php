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
                    <x-ui.input name="current_password" label="رمز عبور فعلی" type="password" required autocomplete="current-password" />
                    <x-ui.input name="password" label="رمز عبور جدید" type="password" required autocomplete="new-password" help="از یک عبارت طولانی و منحصربه‌فرد استفاده کنید." />
                    <x-ui.input name="password_confirmation" label="تکرار رمز عبور جدید" type="password" required autocomplete="new-password" />
                    </div>
                    <div class="card-footer d-flex flex-wrap gap-2 justify-content-end">
                        <x-ui.button :href="route('admin.dashboard')" variant="secondary">انصراف</x-ui.button>
                        <x-ui.button variant="accent" type="submit">ذخیره رمز جدید</x-ui.button>
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
