<?php

namespace pouyabh\setignore;

use Illuminate\Support\ServiceProvider;

class SetIgnoreServiceProvider extends ServiceProvider
{
    public function boot()
    {
        \pouyabh\setignore\setignore::SetIgnore();
    }

    public function register()
    {
        $this->app->singleton(setignore::class, function () {
            return new setignore;
        });
    }
}
