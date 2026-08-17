<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Queries\Storefront\GetHomePagePreview;
use Illuminate\Contracts\View\View;

class HomeController extends Controller
{
    public function __invoke(GetHomePagePreview $getHomePagePreview): View
    {
        return view('public.home', ['home' => $getHomePagePreview()]);
    }
}
