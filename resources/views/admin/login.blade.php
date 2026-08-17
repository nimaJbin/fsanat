@extends('layouts.admin.guest', ['title' => 'ورود به پنل مدیریت'])

@section('content')
    <section class="card admin-auth-card" aria-labelledby="login-title">
        <div class="card-body p-4 p-sm-5">
            <h1 class="h2 text-center mb-2" id="login-title">ورود به پنل مدیریت</h1>
            <p class="text-secondary text-center mb-4">نام کاربری و رمز عبور خود را وارد کنید.</p>

            <form method="POST" action="{{ route('admin.login.store') }}">
                @csrf

                <div class="mb-3">
                    <label class="form-label" for="username">نام کاربری</label>
                    <input
                        class="form-control @error('username') is-invalid @enderror"
                        id="username"
                        name="username"
                        type="text"
                        value="{{ old('username') }}"
                        required
                        autofocus
                        autocomplete="username"
                    >
                    @error('username')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label" for="password">رمز عبور</label>
                    <input
                        class="form-control @error('password') is-invalid @enderror"
                        id="password"
                        name="password"
                        type="password"
                        required
                        autocomplete="current-password"
                    >
                    @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <button class="btn btn-accent w-100" type="submit">ورود به پنل</button>
            </form>
        </div>
    </section>
@endsection
