<?php

declare(strict_types=1);

namespace Weather;

class WeatherApiClient implements WeatherApiClientInterface
{
    public function getTemperature(): Temperature
    {
        return new Temperature(20.5, 'C');
    }
}
