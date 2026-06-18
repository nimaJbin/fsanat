<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AdminLoginRequest;
use App\Services\Admin\AdminAuthenticationService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AdminAuthenticatedSessionController extends Controller
{
    public function create(): View
    {
        return view('admin.login');
    }

    public function store(AdminLoginRequest $request, AdminAuthenticationService $authentication): RedirectResponse
    {
        $authentication->login($request);

        return redirect()->intended(route('admin.dashboard', absolute: false));
    }

    public function destroy(Request $request, AdminAuthenticationService $authentication): RedirectResponse
    {
        $authentication->logout($request);

        return redirect()->route('admin.login');
    }
}
