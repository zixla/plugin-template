<?php

namespace :uc:vendor\:uc:plugin\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{

    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = ':uc:vendor\:uc:plugin\Http\Controllers';

    /**
     * Register any plugin services.
     *
     * @return void
     */
    public function register()
    {
        $this->mapApiRoutes();
        $this->mapWebRoutes();
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapWebRoutes()
    {
        Route::middleware('web')
            ->prefix(':lc:plugin')
            ->namespace($this->namespace)
            ->group(__DIR__ . '/../../routes/web.php');
    }

    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapApiRoutes()
    {
        Route::prefix('api/:lc:plugin')
            ->middleware('api')
            ->namespace($this->namespace)
            ->group(__DIR__ . '/../../routes/api.php');
    }

}
