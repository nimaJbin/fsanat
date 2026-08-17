<?php

namespace App\Http\Controllers\Admin;

use App\Actions\Auth\UpdateAdminPassword;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UpdatePasswordRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class PasswordController extends Controller
{
    public function edit(): View
    {
        return view('admin.settings.password');
    }

    public function update(UpdatePasswordRequest $request, UpdateAdminPassword $updatePassword): RedirectResponse
    {
        $updatePassword($request->user(), $request->validated('password'));

        return back()->with('success', 'رمز عبور با موفقیت تغییر کرد.');
    }
}
