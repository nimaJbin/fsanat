<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Queries\Admin\GetDashboardOverview;
use Illuminate\Contracts\View\View;

class DashboardController extends Controller
{
    public function __invoke(GetDashboardOverview $getDashboardOverview): View
    {
        return view('admin.dashboard', ['dashboard' => $getDashboardOverview()]);
    }
}
