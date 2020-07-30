<?php

declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

use Application\WeatherApplication;
use Weather\AmericanWeatherApiDecorator;
use Weather\CachedWeatherApiDecorator;
use Weather\WeatherApiClient;

$pureApiClient = new WeatherApiClient();
$app = new WeatherApplication($pureApiClient);
$app->showInfo();

$cachedClient = new CachedWeatherApiDecorator(
    new WeatherApiClient()
);
$app2 = new WeatherApplication($cachedClient);
$app2->showInfo();

$cachedAmericanClient = new AmericanWeatherApiDecorator(
    new CachedWeatherApiDecorator(
        new WeatherApiClient()
    )
);
$app3 = new WeatherApplication($cachedAmericanClient);
$app3->showInfo();
