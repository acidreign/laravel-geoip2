# GeoIP2 for Laravel

## Install

Via Composer

``` bash
$ composer require acidreign/laravel-geoip2
```

``` php
'providers' => array(
    Acidreign\LaravelGeoIP2\GeoIP2ServiceProvider::class,
)
```

``` php
'aliases' => array(
    'GeoIP2' => Acidreign\LaravelGeoIP2\GeoIP2Facade::class,
)
```

``` php
$ php artisan vendor:publish --provider="Acidreign\LaravelGeoIP2\GeoIP2ServiceProvider"
```
