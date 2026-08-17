@extends('layouts.admin', ['title' => 'تغییر رمز عبور'])

@section('body')
    <main class="admin-auth-page" id="main-content">
        <section class="card admin-auth-card" aria-labelledby="password-title">
            <div class="card-body p-4">
                <h1 class="h2 mb-2" id="password-title">تغییر رمز عبور</h1>
                <p class="text-secondary mb-4">برای امنیت حساب، ابتدا رمز عبور فعلی را وارد کنید.</p>

                @if (session('success'))
                    <div class="alert alert-success" role="status">{{ session('success') }}</div>
                @endif

                <form method="POST" action="{{ route('admin.password.update') }}">
                    @csrf
                    @method('PUT')

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

                    <div class="d-flex gap-2 justify-content-end">
                        <a class="btn btn-outline-secondary" href="{{ route('admin.dashboard') }}">انصراف</a>
                        <button class="btn btn-accent" type="submit">ذخیره رمز جدید</button>
                    </div>
                </form>
            </div>
        </section>
    </main>
@endsection
