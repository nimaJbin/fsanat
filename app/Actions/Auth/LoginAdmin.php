<?php

namespace App\Actions\Auth;

use App\Http\Requests\Admin\AdminLoginRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Validation\ValidationException;

class LoginAdmin
{
    public function __invoke(AdminLoginRequest $request): void
    {
        $credentials = $request->validated();
        $key = 'admin-login:'.mb_strtolower($credentials['username']).'|'.$request->ip();

        if (RateLimiter::tooManyAttempts($key, 5)) {
            $seconds = RateLimiter::availableIn($key);

            throw ValidationException::withMessages([
                'username' => "تعداد تلاش‌ها بیش از حد مجاز است. {$seconds} ثانیه دیگر دوباره تلاش کنید.",
            ]);
        }

        $user = User::query()->where('username', $credentials['username'])->first();

        if (! $user || ! $user->is_active || ! $user->isStaff() || ! Hash::check($credentials['password'], $user->password)) {
            RateLimiter::hit($key, 60);

            throw ValidationException::withMessages([
                'username' => 'نام کاربری یا رمز عبور صحیح نیست.',
            ]);
        }

        RateLimiter::clear($key);
        Auth::login($user);
        $request->session()->regenerate();
    }
}
