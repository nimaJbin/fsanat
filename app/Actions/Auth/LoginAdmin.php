<?php

namespace App\Actions\Auth;

use App\Http\Requests\Admin\AdminLoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginAdmin
{
    public function __invoke(AdminLoginRequest $request): void
    {
        if (! Auth::attempt($request->validated())) {
            throw ValidationException::withMessages([
                'username' => __('auth.failed'),
            ]);
        }

        $request->session()->regenerate();
    }
}
