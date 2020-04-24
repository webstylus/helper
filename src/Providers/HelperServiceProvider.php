<?php

namespace Lojazone\Helper\Providers;

use Illuminate\Support\ServiceProvider;
use Lojazone\Helper\Support\Helper;

class HelperServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/../views', 'helper');
    }

    public function register()
    {
        $this->app->singleton(Helper::class, function () {
            return new Helper();
        });
    }

}
