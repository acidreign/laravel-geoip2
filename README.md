# GeoIP2 for Laravel 5.2-3

## Installation

1) In order to install run the following composer command:

``` bash
composer require talkative/laravel-geoip2
```

2) Open your `config/app.php` and add the following to the `providers` array:

``` php
Talkative\LaravelGeoIP2\GeoIP2ServiceProvider::class,
```

3) In the same config/app.php and add the following to the aliases array:

``` php
'GeoIP2' => Talkative\LaravelGeoIP2\GeoIP2Facade::class,
```

4) Run the command below to publish the package:

``` php
$ php artisan vendor:publish --provider="Talkative\LaravelGeoIP2\GeoIP2ServiceProvider"
```
