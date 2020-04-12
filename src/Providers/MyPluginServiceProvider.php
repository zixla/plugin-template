<?php

namespace :uc:vendor\:uc:plugin\Providers;

use Illuminate\Support\ServiceProvider;

class :uc:pluginServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
         $this->loadTranslationsFrom(__DIR__.'/../../resources/lang', 'z-:lc:plugin');
         $this->loadViewsFrom(__DIR__.'/../../resources/views', 'z-:lc:plugin');
         $this->loadMigrationsFrom(__DIR__.'/../../database/migrations');

    }

    /**
     * Register any plugin services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../../config/z-:lc:plugin.php', 'z-:lc:plugin');

        $this->app->register(RouteServiceProvider::class);
        $this->app->register(EventServiceProvider::class);
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [':lc:plugin'];
    }

}
