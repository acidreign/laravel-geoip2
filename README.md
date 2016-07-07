# GeoIP2 for Laravel

## Install

Via Composer

``` bash
$ composer require acidreign/laravel-geoip2
```

``` php
'providers' => array(
    'Acidreign\LaravelGeoIP2\GeoIP2ServiceProvider',
)
```

``` php
'aliases' => array(
    'GeoIP2' => 'Acidreign\LaravelGeoIP2\GeoIP2Facade',
)
```

``` php
$ php artisan config:publish acidreign/laravel-geoip2
```
