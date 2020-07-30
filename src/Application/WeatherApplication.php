<?php

declare(strict_types=1);

namespace Application;

use Weather\WeatherApiClientInterface;

class WeatherApplication
{
    private WeatherApiClientInterface $weatherApiClient;

    public function __construct(WeatherApiClientInterface $weatherApiClient)
    {
        $this->weatherApiClient = $weatherApiClient;
    }

    public function showInfo(): void
    {
        echo 'Hello, current temperature is: ' . $this->weatherApiClient->getTemperature();
        echo "\n";
    }
}
