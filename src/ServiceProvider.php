<?php

namespace Dwapp\Api;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\ServiceProvider as IlluminateServiceProvider;
use Illuminate\Database\Eloquent\Relations\Relation;
use Mindyourteam\Core\Console\Commands\ImportEpics;
use Mindyourteam\Core\Console\Commands\ClientQuestions;
use Mindyourteam\Core\Console\Commands\SendQuestion;
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

        $this->mergeConfigRecursiveFrom(
            __DIR__ . '/../config.php', 'dwapp'
        );
    }

    public function register()
    {
        Route::middleware('web')
            ->namespace('Dwapp\Api\Controllers')
            ->group(__DIR__ . '/../routes.php');

        //$this->loadRoutesFrom(__DIR__ . '/../routes.php');
    }
}
