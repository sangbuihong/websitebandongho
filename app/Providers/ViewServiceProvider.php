<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\View\Composers\MenuComposer;
use Illuminate\Support\Facades;
use Illuminate\View\View;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View()->composer('header', 'App\View\Composers\MenuComposer');
        View()->composer('cart', 'App\View\Composers\CartComposer');
    }
}
