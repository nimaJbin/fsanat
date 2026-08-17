@extends('layouts.admin.guest', ['title' => 'ورود به پنل مدیریت'])

@section('content')
    <section class="card admin-auth-card" aria-labelledby="login-title">
        <div class="card-body p-4 p-sm-5">
            <h1 class="h2 text-center mb-2" id="login-title">ورود به پنل مدیریت</h1>
            <p class="text-secondary text-center mb-4">نام کاربری و رمز عبور خود را وارد کنید.</p>

            <form method="POST" action="{{ route('admin.login.store') }}">
                @csrf

                <x-ui.input name="username" label="نام کاربری" required autofocus autocomplete="username" />
                <x-ui.input name="password" label="رمز عبور" type="password" required autocomplete="current-password" />
                <x-ui.button class="w-100" variant="accent" type="submit">ورود به پنل</x-ui.button>
            </form>
        </div>
    </section>
@endsection
