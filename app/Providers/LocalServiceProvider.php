<?php

/*
| file: app/Providers/LocalServiceProvider.php
| to load composer require-dev packages only when in local dev env
| this SP goes in app/Providers/ as usual and then
| add this to providers array in config/app.php:
| App\Providers\LocalServiceProvider::class
*/

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class LocalServiceProvider extends ServiceProvider
{
 
    // add any local only servive providers here:
    protected $providers = [
    \Barryvdh\Debugbar\ServiceProvider::class,
	\Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider::class
    ];

    // and local only aliases here:
    protected $aliases = [
        'Debugbar' => 'Barryvdh\Debugbar\Facade'
    ];

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
 
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //register the service providers for local environment
        if ($this->app->isLocal() && !empty($this->providers)) {
            foreach ($this->providers as $provider) {
                $this->app->register($provider);
            }

            //register the alias
            if (!empty($this->aliases)) {
                foreach ($this->aliases as $alias => $facade) {
                    $this->app->alias($alias, $facade);
                }
            }
        }
 
    }
}
