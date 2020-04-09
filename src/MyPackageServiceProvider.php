<?php

namespace :uc:vendor\:uc:plugin;

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
         $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'z-:lc:plugin');
         $this->loadViewsFrom(__DIR__.'/../resources/views', 'z-:lc:plugin');
         $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
         $this->loadRoutesFrom(__DIR__.'/../routes/web.php');

    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/:lc:plugin.php', 'z-:lc:plugin');
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
