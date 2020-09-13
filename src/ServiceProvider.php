<?php

namespace Mindyourteam\Links;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\ServiceProvider as IlluminateServiceProvider;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Pagination\Paginator;

class ServiceProvider extends IlluminateServiceProvider
{
    protected function mergeConfigRecursiveFrom($path, $key)
    {
        $config = $this->app['config']->get($key, []);
        $this->app['config']->set($key, array_merge_recursive($config, require $path));
    }

    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');

        $this->mergeConfigFrom(
            __DIR__ . '/../link.php', 'crud.link'
        );
        $this->loadViewsFrom(__DIR__ . '/../views', 'link');
    }

    public function register()
    {
        Route::middleware('web')
            ->namespace('Mindyourteam\Links\Controllers')
            ->group(__DIR__ . '/../routes.php');
    }
}
