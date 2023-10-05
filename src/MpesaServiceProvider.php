<?php

namespace Manoti\Mpesa;

use Illuminate\Support\ServiceProvider;

class MpesaServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            //publish the config files
            $this->publishes([
                __DIR__ . '/../config/daraja.php' => config_path('daraja.php'),
            ], 'mpesa-config');
        }
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/daraja.php', 'mpesa');

        // $this->app->bind('manoti-mpesa', function () {
        //     return new Mpesa();
        // });
    }
}
