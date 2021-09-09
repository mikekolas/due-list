<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\View\Composers\SidebarComposer;
use App\View\Composers\ListComposer;
use Illuminate\Support\Facades\View;
use Illuminate\Pagination\Paginator;

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
        Paginator::useBootstrap();
        
        // View composer to populate sidebar with the user's list
        View::composer('partials.sidebar', SidebarComposer::class);

        // View composer to populate chosen list's tasks
        View::composer('lists.show', ListComposer::class);
    }
}
