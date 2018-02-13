<?php

namespace Bespoke\BladeManager;

use Illuminate\Support\ServiceProvider;

use Bespoke\BladeManager\Services\BladeDirectiveManager;

/**
 * Class BladeManagerServiceProvider
 *
 * @package App
 */
class BladeManagerServiceProvider extends ServiceProvider
{
    /**
     * Register any application services
     *
     * @throws \Exception
     */
    public function register()
    {
        // Register facades and bindings
        $this->app->bind('blade_directive_manager', BladeDirectiveManager::class);
    }


    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Register the custom directives
        $this->app->make('blade_directive_manager')->register();

        // Register the views
        $viewPath = __DIR__ . '/Views';
        $this->loadViewsFrom($viewPath, 'blade_manager');
        $this->publishes([$viewPath => $this->app->resourcePath('views/vendor/' . 'blade_manager')]);
    }
}
