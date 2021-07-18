<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\View\Composers\SidebarComposer;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // View composer to populate sidebar with the user's list
        View::composer('partials.sidebar', SidebarComposer::class);
    }
}
