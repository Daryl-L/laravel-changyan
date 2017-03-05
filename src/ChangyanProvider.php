<?php

namespace Daryl\LaravelChangyan;

use Illuminate\Support\ServiceProvider;

class ChangyanProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/views', 'changyan');

        $this->publishes([
            __DIR__ . '/config/changyan.php' => config_path('changyan.php'), 
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('changyan', function () {
            return new Changyan();
        });
    }
}
