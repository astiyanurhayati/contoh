<?php

namespace App\Providers;

use App\Models\General;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class GeneralServiceProvider extends ServiceProvider
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
        View::composer('layouts.master', function ($view) {
            $general = General::first();
            $view->with('general', $general);
        });

        View::composer('layouts.main', function ($view) {
            $general = General::first();
            $view->with('general', $general);
        });

        
    }
}
