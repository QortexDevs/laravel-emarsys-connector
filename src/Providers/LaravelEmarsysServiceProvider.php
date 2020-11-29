<?php

namespace Qortex\Laravel\Emarsys\Providers;

use Illuminate\Support\ServiceProvider;

class LaravelEmarsysServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../../config/emarsys.php' => config_path('emarsys.php')
        ]);
    }

    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../../config/emarsys.php',
            config_path('emarsys.php')
        );
    }
}
