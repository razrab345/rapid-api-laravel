<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
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
        // Using class based composers...
        View::composer(
            'sidebar', 'App\Http\ViewComposers\SidebarComposer'
        );

        // // Using Closure based composers...
        // View::composer('sidebar', function ($view) {
        //     //
        // });
    }
}
