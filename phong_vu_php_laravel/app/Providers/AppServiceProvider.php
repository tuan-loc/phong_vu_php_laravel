<?php

namespace App\Providers;

use App\Models\Banner;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Schema;
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
        Schema::defaultStringLength(191);
        $banner_headers = Banner::where('status', 'active')->where('banner_type', 'banner_header')->orderBy('id', 'DESC')->get();
        View::share('banner_headers', $banner_headers);
        Paginator::useBootstrapFour();
    }
}