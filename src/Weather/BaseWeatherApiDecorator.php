<?php

declare(strict_types=1);

namespace Weather;

abstract class BaseWeatherApiDecorator implements WeatherApiClientInterface
{
    private WeatherApiClientInterface $weatherApiClient;

    public function __construct(WeatherApiClientInterface $weatherApiClient)
    {
        $this->weatherApiClient = $weatherApiClient;
    }

    public function getTemperature(): Temperature
    {
        return $this->weatherApiClient->getTemperature();
    }
}
