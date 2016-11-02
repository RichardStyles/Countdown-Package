<?php

namespace Styles\Countdown;

use Illuminate\Support\ServiceProvider;

class CountdownServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        if (! $this->app->routesAreCached()) {
            require __DIR__.'/routes.php';
        }

        $this->loadViewsFrom(__DIR__.'/views', 'countdown');
        $this->publishes([
            __DIR__.'/views' => resource_path('views/vendor/countdown'),
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
