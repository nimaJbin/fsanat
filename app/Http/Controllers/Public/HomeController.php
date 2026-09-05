<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Queries\Storefront\GetHomePageCatalog;
use Illuminate\Contracts\View\View;

class HomeController extends Controller
{
    public function __invoke(GetHomePageCatalog $getHomePageCatalog): View
    {
        return view('public.home', ['home' => $getHomePageCatalog()]);
    }
}
