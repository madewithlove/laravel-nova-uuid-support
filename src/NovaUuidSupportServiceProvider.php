<?php

namespace Madewithlove\NovaUuidSupport;

use Illuminate\Support\ServiceProvider;

class NovaUuidSupportServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        }
    }
}
