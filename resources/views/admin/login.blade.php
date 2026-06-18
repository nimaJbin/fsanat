@extends('layouts.admin', ['title' => 'Admin Login'])

@section('body')
    <main class="auth-page">
        <section class="panel" aria-labelledby="login-title">
            <h1 id="login-title">Admin Login</h1>
            <p>Sign in with your username and password.</p>

            <form method="POST" action="{{ route('admin.login.store') }}">
                @csrf

                <div class="field">
                    <label for="username">Username</label>
                    <input
                        id="username"
                        name="username"
                        type="text"
                        value="{{ old('username') }}"
                        required
                        autofocus
                        autocomplete="username"
                    >
                    @error('username')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="field">
                    <label for="password">Password</label>
                    <input
                        id="password"
                        name="password"
                        type="password"
                        required
                        autocomplete="current-password"
                    >
                    @error('password')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="actions">
                    <button class="button" type="submit">Login</button>
                </div>
            </form>
        </section>
    </main>
@endsection
