<?php

namespace Acidreign\LaravelGeoIP2;

use Illuminate\Support\ServiceProvider;
use Acidreign\LaravelGeoIP2\Console\UpdateCommand;

class GeoIP2ServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        $configPath = __DIR__ . '/config/geoip2.php';
        $this->publishes([$configPath => config_path('geoip2.php')]);
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app['geoip2'] = $this->app->share(function ($app) {
            return new GeoIP2($app['config'], $app['request']);
        });

        $this->app['command.geoip2.update'] = $this->app->share(function ($app) {
            return new UpdateCommand($app['config']);
        });

        $this->commands(array('command.geoip2.update'));
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return array('geoip2', 'command.geoip2.update');
    }
}
