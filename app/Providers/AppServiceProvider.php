<?php

namespace App\Providers;

use App\Queries\Admin\GetAdminNavigation;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::useBootstrapFive();

        View::composer('layouts.admin.authenticated', function ($view): void {
            $user = request()->user();

            $view->with('adminNavigation', $user ? app(GetAdminNavigation::class)($user) : []);
        });
    }
}
