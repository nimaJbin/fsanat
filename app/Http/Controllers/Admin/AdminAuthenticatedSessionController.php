<?php

namespace App\Http\Controllers\Admin;

use App\Actions\Auth\LoginAdmin;
use App\Actions\Auth\LogoutAdmin;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AdminLoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AdminAuthenticatedSessionController extends Controller
{
    public function create(): View
    {
        return view('admin.login');
    }

    public function store(AdminLoginRequest $request, LoginAdmin $loginAdmin): RedirectResponse
    {
        $loginAdmin($request);

        return redirect()->intended(route('admin.dashboard', absolute: false));
    }

    public function destroy(Request $request, LogoutAdmin $logoutAdmin): RedirectResponse
    {
        $logoutAdmin($request);

        return redirect()->route('admin.login');
    }
}
